<?php

namespace App\Models;

use App\Helpers\GenericFn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    use HasFactory;
    protected $table = 'room';

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public static function available($checkin, $checkout)
    {
        return Room::where('status', 'Available')
            // ->where('discount', 0)
            ->whereNotExists(
                function ($query) use ($checkin, $checkout) {
                    $query->select(DB::raw(1))
                        ->from('booking as b')
                        ->whereRaw('room.id = b.room_id')
                        ->where(function ($subquery) use ($checkin, $checkout) {
                            $subquery->whereBetween('b.check_in', [$checkin, $checkout])
                                ->orWhereBetween('b.check_out', [$checkin, $checkout])
                                ->orWhere(function ($innerSubquery) use ($checkin, $checkout) {
                                    $innerSubquery->where('b.check_in', '>=', $checkin)
                                        ->where('b.check_in', '<=', $checkout);
                                })
                                ->orWhere(function ($innerSubquery) use ($checkin, $checkout) {
                                    $innerSubquery->where('b.check_out', '>=', $checkin)
                                        ->where('b.check_out', '<=', $checkout);
                                });
                        });
                }
            )
            ->get();
    }
    public static function process_room($room)
    {
        $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
        $room['randomImage'] = GenericFn::getRandomImage();
        $room['amenityImages'] = GenericFn::getAmenityImages();
        $room['amenitiesData'] = GenericFn::getAmenitiesData();
        return $room;
    }
    public static function process_multiple_rooms($rooms)
    {
        foreach ($rooms as &$room) {
            $room = self::process_room($room);
        }
        return $rooms;
    }
};
