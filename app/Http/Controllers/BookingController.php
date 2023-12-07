<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use App\Helpers\GenericFn;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'checkin' => 'required',
            'checkout' => 'required',
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $checkin = $request->input('check-in');
        $checkout = $request->input('check-out');
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $roomId = $_SESSION['roomId'];

        Booking::create([
            'guest' => $fullname,
            'phone_number' => $phone,
            'email' => $email,
            'check_in' => $checkin,
            'check_out' => $checkout,
            'special_request' => $message,
            'room_id' => $roomId,
        ]);

        $error = false;
        $notification = 'Your form has been sent';
        return redirect('/')->with(['notification' => $notification, 'error' => $error]);
    }
    public function show(Request $request)
    {
        if (isset($_SESSION['availdatein']) && isset($_SESSION['availdateout'])) {
            $start = $_SESSION['availdatein'];
            $end = $_SESSION['availdateout'];
        } else {
            $start = null;
            $end = null;
        };

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
        $_SESSION['roomId'] = $roomId;
        $room = Room::find($roomId);

        if (isset($room['discount'])) {
            $room['discountedPrice'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
        }
        $room->randomImage = GenericFn::getRandomImage();
        $room->amenityImages = GenericFn::getAmenityImages();
        $room->amenitiesData = GenericFn::getAmenitiesData();

        return view('room-detail', ['room' => $room, 'relatedRooms' => $relatedRooms, 'start' => $start, 'end' => $end]);
    }
}
