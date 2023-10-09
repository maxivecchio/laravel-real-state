<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $city = $request->input('city');

        $query = Property::where('city', 'like', '%' . $city . '%');

        $properties = $query->get();

/*         dd($properties); */

        return view('search-results', ['properties' => $properties]);
    }
}