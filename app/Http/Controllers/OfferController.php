<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Helpers\GenericFn;

class OfferController extends Controller
{
    public function index()
    {
        $rooms = Room::where('status', 'Available')
            ->where('discount', '>', 0)
            ->inRandomOrder()
            ->limit(5)
            ->get();

        foreach ($rooms as &$room) {
            $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
            $room['randomImage'] = GenericFn::getRandomImage();
            $room['amenityImages'] = GenericFn::getAmenityImages();
            $room['amenitiesData'] = GenericFn::getAmenitiesData();
        }
        return view('offers', ['rooms' => $rooms]);
    }
}
