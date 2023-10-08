<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::all();
        return view('properties.index', ['properties' => $properties]);
    }


    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $validatedData = [
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'zipcode' => $request->input('zipcode'),
            'kitchen' => $request->input('kitchen'),
            'bedroom' => $request->input('bedroom'),
            'bathroom' => $request->input('bathroom'),
            'office' => $request->input('office'),
            'garage' => $request->input('garage'),
            'floors' => $request->input('floors'),
            'size' => $request->input('size'),
            'image_path' => $request->input('image_path'),
            'owner_id' => 4
            
        ];
        $property = new Property($validatedData);
        $property->save();
    
        return redirect()->route('properties.index');
    }
    

    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->all());

        return redirect()->route('properties.index')->with('success', 'Property updated successfully');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'La propiedad ha sido eliminada correctamente.');
    }

}