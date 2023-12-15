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

    public function getNews($id)
    {
        $news = News::find($id);
        if (!$news) {
            abort(404);
        }

        return view('news.single', compact('news'));
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
            'category' => $request->input('category'),
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

        return redirect()->route('dashboard.news.index')->with('success', 'News successfully updated.');
    }

    public function uploadCSV()
    {
        $csvFilePath = public_path('uploads/news.csv');

        $csvData = file_get_contents($csvFilePath);

        $rows = explode("\n", trim($csvData));
        foreach ($rows as $row) {
            $columns = str_getcsv($row, ",");
            $newsData = [
                'title' => $columns[0],
                'subtitle' => $columns[1],
                'body' => $columns[2],
                'author' => $columns[3],
                'category' => $columns[4],
                'image_path' => $columns[5],
                'display' => intval($columns[6]),
            ];

            $news = new News($newsData);
            $news->save();
        }
        return redirect()->route('dashboard.news.index')->with('success', 'News successfully added.');
    }

    public function emptyTable()
    {
        try {
            News::truncate();
            return redirect()->route('dashboard.news.index')->with('success', 'News successfully deleted.');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.news.index')->with('error', 'Error.');
        }
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'News successfully deleted.');
    }
}