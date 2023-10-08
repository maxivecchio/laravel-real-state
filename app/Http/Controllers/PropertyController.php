<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PropertiesImport;

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
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'zipcode' => $request->input('zipcode'),
            'state' => $request->input('state'),
            'bedrooms' => $request->input('bedrooms'),
            'bathrooms' => $request->input('bathrooms'),
            'kitchen' => $request->input('kitchen'),
            'bedroom' => $request->input('bedroom'),
            'bathroom' => $request->input('bathroom'),
            'office' => $request->input('office'),
            'garage' => $request->input('garage'),
            'floors' => $request->input('floors'),
            'size' => $request->input('size'),
            'status_id' => $request->input('status_id'),
            'image_path' => $request->input('image_path'),
            'owner_id' => 4

        ];
        $property = new Property($validatedData);
        $property->save();

        return redirect()->route('properties.index');
    }

    public function uploadProperties()
    {
        $csvFileUrl = 'http://127.0.0.1:8000/uploads/data.csv';

        Excel::import(new PropertiesImport, $csvFileUrl);

        return redirect()->route('properties.index')->with('success', 'Properties uploaded successfully.');
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