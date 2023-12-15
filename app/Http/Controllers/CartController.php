<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Auth::check()) {
            $user_id = auth()->user()->id;

            $cartItems = Cart::where('user_id', $user_id)->with('property')->get();

            return view('cart', compact('cartItems'));
        } else {
            return redirect('/properties')->with('error', 'You must be signed in.');
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
            $property_id = $request->property_id;

            $existingCartItem = Cart::where('user_id', $user_id)->where('property_id', $property_id)->first();

            if ($existingCartItem) {
                return redirect('/cart')->with('error', 'Ya tienes este producto en tu carrito.');
            }

            Cart::create([
                'user_id' => $user_id,
                'property_id' => $property_id,
            ]);

            return redirect('/cart');
        } else {
            return redirect('/properties')->with('error', 'You must be signed in.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect('/cart')->with('success', 'Producto eliminado del carrito exitosamente');
    }
}