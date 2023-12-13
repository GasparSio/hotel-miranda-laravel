<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $orders = Order::where('user_id', $id)
            ->join('guest', 'orders.user_id', '=', 'guest.id')
            ->select('guest.room_number', 'orders.*')
            ->get();
        return view('your-orders', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|integer',
            'type' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        Order::create($request->all());
        //     ->get();
        // return view('your-orders', ['orders' => $orders]);
        return redirect('/roomservice/your-orders');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $id = Auth::id();
        $user = User::find($id);
        $room_number = $user->room_number;
        $room = Room::where('room_number', $room_number)->first();
        return view('roomservice', ['user' => $user, 'room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->input('order_id');
        $order = Order::find($id);

        $order->update($request->all());
        // $order = Order::all();

        return redirect('/roomservice/your-orders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('order_id');
        Order::destroy($id);
        return redirect('/roomservice/your-orders');
    }
}
