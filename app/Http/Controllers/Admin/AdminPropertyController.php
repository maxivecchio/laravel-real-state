<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class AdminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
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
            'size' => $request->input('size'),
            'image_path' => $request->has('image_path') && !empty($request->input('image_path')) ? $request->input('image_path') : 'https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg',
        ];

        $property = Property::create($validatedData); 
        $characteristicsData = $request->validate([
            'bedroom' => 'required|integer|min:0',
            'bathroom' => 'required|integer|min:0',
            'garage' => 'required|integer|min:0',
            'office' => 'required|integer|min:0',
            'floors' => 'required|integer|min:0',
            'kitchen' => 'required|integer|min:0',
        ]);

        $property->characteristics()->create($characteristicsData);

        $property->save();
        return redirect("/dashboard/properties");
    }

    public function show(string $id)
    {
        //  
    }

    public function edit(Property $property)
    {
        return view('dashboard.properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->all());
        return redirect("/dashboard/properties")->with('success', 'Property updated successfully');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect("/dashboard/properties")->with('success', 'The property has been deleted successfully.');
    }
}
