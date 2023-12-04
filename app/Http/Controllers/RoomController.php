<?php

namespace App\Http\Controllers;

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
        return view('index', ['rooms' => $rooms]);
    }
    public function room()
    {
        $rooms = Room::all();

        return view('room-grid', ['rooms' => $rooms]);
    }
    public function show($id)
    {
        $rooms = Room::findorFail($id);

        return view('room-detail', ['rooms' => $rooms]);
    }
};
