<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PropertyRequest;
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

    public function store(PropertyRequest $request)
    {
        $data = $request->all();
        $data['image_path'] = $data['image_path'] ?? 'https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg';
        $characteristicsData = [
            'bedroom' => $data['bedroom'],
            'bathroom' => $data['bathroom'],
            'garage' => $data['garage'],
            'office' => $data['office'],
            'floors' => $data['floors'],
            'kitchen' => $data['kitchen']
        ];
        unset($data['bedroom'], $data['bathroom'], $data['garage'], $data['office'], $data['floors'], $data['kitchen']);
        $property = Property::create($data);
        $property->characteristics()->create($characteristicsData);
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

    public function update(PropertyRequest $request, Property $property)
    {
        $data = $request->all();
        $characteristicsData = [
            'bedroom' => $data['bedroom'],
            'bathroom' => $data['bathroom'],
            'garage' => $data['garage'],
            'office' => $data['office'],
            'floors' => $data['floors'],
            'kitchen' => $data['kitchen']
        ];
        unset($data['bedroom'], $data['bathroom'], $data['garage'], $data['office'], $data['floors'], $data['kitchen']);
        $property->update($data);
        $property->characteristics()->updateOrCreate(['property_id' => $property->id], $characteristicsData);
        return redirect("/dashboard/properties")->with('success', 'Property updated successfully');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect("/dashboard/properties")->with('success', 'The property has been deleted successfully.');
    }
}
