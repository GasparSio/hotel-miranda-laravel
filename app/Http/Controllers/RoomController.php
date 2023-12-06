<?php

namespace App\Http\Controllers;

session_start();


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
    public function rooms(Request $request)
    {
        if ($request->input('availdatein') && $request->input('availdateout')) {
            $checkin = $request->input('availdatein');
            $_SESSION['availdatein'] = $checkin;
            $checkout = $request->input('availdateout');
            $_SESSION['availdateout'] = $checkout;

            $rooms = Room::available($checkin, $checkout);
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
};
