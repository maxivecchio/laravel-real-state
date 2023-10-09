<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::all();
        return view('dashboard.properties.index', ['properties' => $properties]);
    }

    public function indexPublic()
    {
        $properties = Property::all();
        return view('properties.index', ['properties' => $properties]);
    }

    public function getProperty($id)
    {
        $propertiy = Property::find($id);
        if (!$propertiy) {
            abort(404);
        }
        return view('properties.single', ['news' => $propertiy]);
    }

    public function popularProperties()
    {
        $properties = Property::inRandomOrder()->take(6)->get();
        return view('dashboard.properties.index', ['properties' => $properties]);
    }

    public function create()
    {
        return view('dashboard.properties.create');
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

        return redirect()->route('dashboard.properties.index');
    }

    public function uploadCSV()
    {
        $csvFilePath = public_path('uploads/data.csv');

        $csvData = file_get_contents($csvFilePath);

        $rows = explode("\n", trim($csvData));
        foreach ($rows as $row) {
            $columns = str_getcsv($row, ",");
            $propertyData = [
                'type' => $columns[0],
                'price' => intval($columns[1]),
                'country' => $columns[2],
                'state' => $columns[3],
                'city' => $columns[4],
                'address' => $columns[5],
                'zipcode' => intval($columns[6]),
                'kitchen' => intval($columns[7]),
                'bedroom' => intval($columns[8]),
                'bathroom' => intval($columns[9]),
                'office' => intval($columns[10]),
                'garage' => intval($columns[11]),
                'floors' => intval($columns[12]),
                'size' => intval($columns[13]),
                'image_path' => $columns[14],
            ];

            $property = new Property($propertyData);
            $property->save();
        }
        return redirect()->route('dashboard.properties.index');
    }
    public function edit(Property $property)
    {
        return view('dashboard.properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->all());

        return redirect()->route('dashboard.properties.index')->with('success', 'Property updated successfully');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('dashboard.properties.index')->with('success', 'La propiedad ha sido eliminada correctamente.');
    }

}