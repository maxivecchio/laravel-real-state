<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropiedadController extends Controller
{
    public function create()
    {
        return view('propiedades.create');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'required|numeric',
            'status_id' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen (opcional)
        ]);

        // Procesa y guarda la imagen (si se sube) en storage y guarda la ruta en 'image_path'
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
        }

        // Crea una nueva instancia de Propiedad y asigna los valores
        $propiedad = new Property();
        $propiedad->title = $request->input('title');
        $propiedad->description = $request->input('description');
        $propiedad->price = $request->input('price');
        $propiedad->location = $request->input('location');
        $propiedad->bedrooms = $request->input('bedrooms');
        $propiedad->bathrooms = $request->input('bathrooms');
        $propiedad->size = $request->input('size');
        $propiedad->status_id = 2;
        $propiedad->owner_id = 4; // Asigna el owner_id del usuario autenticado

        dd($propiedad);

        // Asigna la ruta de la imagen si se ha subido
        if (isset($imagePath)) {
            $propiedad->image_path = $imagePath;
        }

        // Guarda la propiedad en la base de datos
        $propiedad->save();

        // Redirecciona a una página de éxito o muestra un mensaje de éxito
        return redirect('/')->with('success', 'Propiedad agregada correctamente');
    }
}