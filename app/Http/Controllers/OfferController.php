<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Helpers\GenericFn;

class OfferController extends Controller
{
    public function offers()
    {
        $amenitiesData = [
            ['url' => '/img/room-detail/img-air-cond.png', 'description' => 'Air conditioner'],
            ['url' => '/img/room-detail/img-breakfast.png', 'description' => 'Breakfast'],
            ['url' => '/img/room-detail/img-cleaning.png', 'description' => 'Cleaning'],
            ['url' => '/img/room-detail/img-grocery.png', 'description' => 'Grocery'],
            ['url' => '/img/room-detail/img-shop near.png', 'description' => 'Shop near'],
            ['url' => '/img/room-detail/img-online.png', 'description' => '24/7 Online Support'],
            ['url' => '/img/room-detail/img-wifi.png', 'description' => 'High speed WiFi'],
            ['url' => '/img/room-detail/img-kitchen.png', 'description' => 'Kitchen'],
            ['url' => '/img/room-detail/img-shower.png', 'description' => 'Shower'],
            ['url' => '/img/room-detail/img-bad.png', 'description' => 'Single bed'],
            ['url' => '/img/room-detail/img-towels.png', 'description' => 'Towels'],
        ];
        $rooms = Room::where('status', 'Available')
            ->where('discount', '>', 0)
            ->inRandomOrder()
            ->limit(5)
            ->get();


        foreach ($rooms as &$room) {
            $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
            $room['randomImage'] = GenericFn::getRandomImage();
            $room['amenityImages'] = GenericFn::getAmenityImages();
            $room['amenitiesData'] = GenericFn::getAmenitiesData($amenitiesData);
        }
        return view('offers', ['rooms' => $rooms]);
    }
}
