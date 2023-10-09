<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('dashboard.news.index', ['news' => $news]);
    }

    public function indexPublic()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }


    public function create()
    {
        return view('dashboard.news.create');
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
    
        return redirect()->route('dashboard.news.index');
    }


    public function edit(News $news)
    {
        return view('dashboard.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->update($request->all());

        return redirect()->route('dashboard.news.index')->with('success', 'La news ha sido actualizada correctamente.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'La news ha sido eliminada correctamente.');
    }



}