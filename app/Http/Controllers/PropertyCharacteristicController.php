<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyCharacteristic;

class PropertyCharacteristicController extends Controller
{
    public function index()
    {
        $characteristics = PropertyCharacteristic::all();
        return view('property_characteristics.index', ['characteristics' => $characteristics]);
    }

    public function create()
    {
        return view('property_characteristics.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'living_room' => 'required',
            'kitchen' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'office' => 'required',
            'has_garage' => 'required',
            'floors' => 'required'
        ]);

        PropertyCharacteristic::create($validatedData);

        return redirect()->route('property_characteristics.index')->with('success', 'Property characteristic created successfully');
    }

    public function edit(PropertyCharacteristic $characteristic)
    {
        return view('property_characteristics.edit', compact('characteristic'));
    }

    public function update(Request $request, PropertyCharacteristic $characteristic)
    {
        $validatedData = $request->validate([
            'living_room' => 'required',
            'kitchen' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'office' => 'required',
            'has_garage' => 'required',
            'floors' => 'required'
        ]);

        $characteristic->update($validatedData);

        return redirect()->route('property_characteristics.index')->with('success', 'Property characteristic updated successfully');
    }

    public function destroy($id)
    {
        $characteristic = PropertyCharacteristic::findOrFail($id);
        $characteristic->delete();

        return redirect()->route('property_characteristics.index')->with('success', 'Property characteristic deleted successfully');
    }
}
