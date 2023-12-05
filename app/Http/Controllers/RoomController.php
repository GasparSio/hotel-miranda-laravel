<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Helpers\GenericFn;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        foreach ($rooms as &$room) {
            $room['randomImage'] = GenericFn::getRandomImage();
            $room['amenityImages'] = GenericFn::getAmenityImages();
        }
        session_destroy();
        return view('index', ['rooms' => $rooms]);
    }
    public function rooms()
    {
        if (isset($_GET["availdatein"]) && isset($_GET["availdateout"])) {
            $checkin = htmlspecialchars($_GET["availdatein"]);
            $_SESSION['availdatein'] = $checkin;
            $checkout = htmlspecialchars($_GET["availdateout"]);
            $_SESSION['availdateout'] = $checkout;

            $rooms = Room::where('status', 'Available')
                ->where('discount', 0)
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
        } else {
            $rooms =
                Room::where('status', 'Available')
                ->where('discount', 0)
                ->get();
        }

        foreach ($rooms as &$room) {
            $room['randomImage'] = GenericFn::getRandomImage();
            $room['amenityImages'] = GenericFn::getAmenityImages();
        }
        return view('rooms-grid', ['rooms' => $rooms]);
    }
    public function show($id)
    {
        $rooms = Room::findOrFail($id);

        return view('room-detail', ['rooms' => $rooms]);
    }
};
