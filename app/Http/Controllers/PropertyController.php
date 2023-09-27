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
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'location' => $request->input('location'),
            'bedrooms' => $request->input('bedrooms'),
            'bathrooms' => $request->input('bathrooms'),
            'size' => $request->input('size'),
            'status_id' => $request->input('status_id'),
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