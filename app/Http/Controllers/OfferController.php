<?php

namespace App\Http\Controllers;

use App\Models\Room;

class OfferController extends Controller
{
    public function index()
    {
        $rooms = Room::where('status', 'Available')
            ->where('discount', '>', 0)
            ->inRandomOrder()
            ->limit(5)
            ->get();

        $rooms = Room::process_multiple_rooms($rooms);

        return view('offers', ['rooms' => $rooms]);
    }
}
