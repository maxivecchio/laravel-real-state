<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }


    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $validatedData = [
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'body' => $request->input('body'),
            'author' => $request->input('author'),
            'image_path' => $request->input('image_path'),
            'display' => $request->input('display'),
        ];
        $news = new News($validatedData);
        $news->save();
    
        return redirect()->route('news.index');
    }


    public function edit(Property $property)
    {
    }

    public function update(Request $request, Property $property)
    {
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'La news ha sido eliminada correctamente.');
    }



}