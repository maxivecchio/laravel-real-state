@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit news</h1>

    <form method="POST" action="/dashboard/news/{{ $news->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">subtitle</label>
            <input class="form-control" id="subtitle" name="subtitle" value="{{ $news->subtitle }}" required>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">body</label>
            <textarea class="form-control" id="body" name="body" required >{{ $news->body }}</textarea>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $news->author }}" required>
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $news->category }}" required>
        </div>

        <div class="mb-3">
            <label for="display" class="form-label">display</label>
            <select class="form-control" id="display" name="display">
                <option value="1">true</option>
                <option value="0">false</option>
            </select>
        </div>

        <div class="mb-3">
                <label for="image_path" class="form-label">Main Image Source (optional)</label>
                <input type="text" class="form-control" id="image_path" name="image_path" value="{{ $news->image_path }}" >
            </div>

        <button type="submit" class="btn btn-primary">Update news</button>
    </form>
</div>
@endsection