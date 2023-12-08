<?php

namespace App\Http\Controllers;

session_start();

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
            'guest' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'special_request' => 'required',
            'room_id' => 'required',
        ]);

        Booking::create($request->all());

        $error = false;
        $notification = 'Your form has been sent';
        return redirect('/')->with(['notification' => $notification, 'error' => $error]);
    }
    public function show_related_rooms(Request $request)
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

        $relatedRooms = Room::process_multiple_rooms($relatedRooms);

        $roomId = $request->input('roomId');
        $_SESSION['roomId'] = $roomId;
        $room = Room::find($roomId);

        $room = Room::process_room($room);

        return view('room-detail', ['room' => $room, 'relatedRooms' => $relatedRooms, 'start' => $start, 'end' => $end]);
    }
}
