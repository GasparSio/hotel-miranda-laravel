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
}
