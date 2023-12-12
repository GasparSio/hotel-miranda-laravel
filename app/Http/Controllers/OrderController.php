<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Room;
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
            ->join('room', 'orders.room_id', '=', 'room.id')
            ->select('room.room_number', 'orders.*')
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
        $allrooms = Room::all();
        return view('roomservice', ['allrooms' => $allrooms]);
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
