<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $orders = Order::where('user_id', $user_id)->get();

            return view('orders.index', compact('orders'));
        } else {
            return redirect('/')->with('error', 'You must be signed in.');
        }
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
        if (Auth::check()) {

            $user_id = auth()->user()->id;

            $cartItems = Cart::where('user_id', $user_id)->with('property')->get();

            $order = Order::create([
                'user_id' => $user_id,
            ]);

            foreach ($cartItems as $cartItem) {
                $order->products()->attach($cartItem->property_id);
            }

            Cart::where('user_id', $user_id)->delete();

            return redirect('orders')->with('success', 'Compra realizada con éxito.');
        } else {
            return redirect('/')->with('error', 'You must be signed in.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('orders.show', compact('order'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}