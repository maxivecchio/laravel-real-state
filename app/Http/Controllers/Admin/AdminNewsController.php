<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('dashboard.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['image_path'] = $data['image_path'] ?? 'https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg';
        $news = new News($data);
        $news->save();
        return redirect('/dashboard/news');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->all());

        return redirect('/dashboard/news')->with('success', 'News successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect('/dashboard/news')->with('success', 'News successfully deleted.');
    }
}
