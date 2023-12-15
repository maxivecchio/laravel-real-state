<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        if(Auth::check()) {
            $profile = Auth::user();
            return view('profile.index', compact('profile'));
        } else {
            return redirect('/')->with('error', 'You must be signed in.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $profile = Auth::user();

        return view('profile.edit', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit() {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) {
        $profile = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$profile->id,
        ]);

        $profile->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}