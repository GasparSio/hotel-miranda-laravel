<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use App\Helpers\GenericFn;

class BookingController extends Controller
{
    // public function store(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         $request->validate([
    //             'check-in' => 'required',
    //             'check-out' => 'required',
    //             'fullname' => 'required',
    //             'email' => 'required|email',
    //             'phone' => 'required',
    //             'message' => 'required',
    //         ]);

    //         $checkin = $request->input('check-in');
    //         $checkout = $request->input('check-out');
    //         $fullname = $request->input('check-in');
    //         $email = $request->input('email');
    //         $phone = $request->input('phone');
    //         $message = $request->input('message');

    //         Booking::create([
    //             'guest' => $fullname,
    //             'phone_number' => $phone,
    //             'email' => $email,
    //             'check_in' => $checkin,
    //             'check_out' => $checkout,
    //             'special_request' => $message,
    //         ]);

    //         $formSent = 'Form Sent';
    //         $error = false;
    //         $notification = ['message' => $formSent];
    //         return view('contact', ['notification' => $notification, 'error' => $error]);
    //     } else {
    //         return view('contact');
    //     }
    // }
    public function show(Request $request)
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

        $relatedRooms =
            Room::where('status', 'Available')
            ->where('discount', 0)
            ->inRandomOrder()
            ->get();

        foreach ($relatedRooms as &$relatedRoom) {
            $relatedRoom['randomImage'] = GenericFn::getRandomImage();
            $relatedRoom['amenityImages'] = GenericFn::getAmenityImages();
        }

        $roomId = $request->input('roomId');
        $room = Room::find($roomId);

        if (isset($room['discount'])) {
            $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
        }
        $room->randomImage = GenericFn::getRandomImage();
        $room->amenityImages = GenericFn::getAmenityImages();
        $room->amenitiesData = GenericFn::getAmenitiesData($amenitiesData);

        return view('room-detail', ['room' => $room, 'relatedRooms' => $relatedRooms]);
    }
}
