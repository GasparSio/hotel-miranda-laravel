<?php

namespace App\Http\Controllers;

session_start();


use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function show_all_rooms()
    {
        $rooms = Room::all();
        $rooms = Room::process_multiple_rooms($rooms);
        session_destroy();
        return view('index', ['rooms' => $rooms]);
    }
    public function show_available_rooms(Request $request)
    {
        if ($request->input('availdatein') && $request->input('availdateout')) {
            $checkin = $request->input('availdatein');
            $_SESSION['availdatein'] = $checkin;
            $checkout = $request->input('availdateout');
            $_SESSION['availdateout'] = $checkout;

            $rooms = Room::available($checkin, $checkout);
            $rooms = Room::process_multiple_rooms($rooms);
        } else {
            $rooms =
                Room::where('status', 'Available')
                ->get();
        }

        $rooms = Room::process_multiple_rooms($rooms);
        return view('rooms-grid', ['rooms' => $rooms]);
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
            ->inRandomOrder()
            ->get();

        $relatedRooms = Room::process_multiple_rooms($relatedRooms);

        $roomId = $request->input('roomId');
        $_SESSION['roomId'] = $roomId;
        $room = Room::find($roomId);

        $room = Room::process_room($room);

        return view('room-detail', ['room' => $room, 'relatedRooms' => $relatedRooms, 'start' => $start, 'end' => $end]);
    }
};
