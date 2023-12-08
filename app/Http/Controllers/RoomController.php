<?php

namespace App\Http\Controllers;

session_start();


use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $rooms = Room::process_multiple_rooms($rooms);
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

        $rooms = Room::process_multiple_rooms($rooms);
        return view('rooms-grid', ['rooms' => $rooms]);
    }
};
