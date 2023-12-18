<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comparison;
use Illuminate\Support\Facades\Auth;

class ComparisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $comparisons = Comparison::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
            return view('comparisons.index', compact('comparisons'));
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
            $request->validate([
                'property1_id' => 'exists:properties,id',
            ]);
            $existingComparison = Comparison::where('user_id', auth()->id())->latest()->first();
            if ($existingComparison && is_null($existingComparison->property2_id)) {
                $existingComparison->update(['property2_id' => $request->property1_id]);
                return redirect('/comparisons');
            } else {
                Comparison::create([
                    'user_id' => auth()->id(),
                    'property1_id' => $request->property1_id,
                ]);
            }
            return redirect('/properties')->with('success', 'Property added to comparison.');
        } else {
            return redirect('/properties')->with('error', 'You must be signed in.');
        }
    }

    public function show(Comparison $comparison)
    {
        return view('comparisons.show', compact('comparison'));
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
