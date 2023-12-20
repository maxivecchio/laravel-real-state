@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit news</h1>

    <form method="POST" action="/dashboard/news/{{ $news->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $news->title }}">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">subtitle</label>
            <input class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ $news->subtitle }}">
            @error('subtitle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" >{{ $news->body }}</textarea>
            @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ $news->author }}">
            @error('author')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" value="{{ $news->category }}">
            @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="display" class="form-label">display</label>
            <select class="form-control @error('display') is-invalid @enderror" id="display" name="display">
                <option value="1">true</option>
                <option value="0">false</option>
            </select>
            @error('display')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Main Image Source (optional)</label>
            <input type="text" class="form-control @error('image_path') is-invalid @enderror" id="image_path" name="image_path" value="{{ $news->image_path }}" >
            @error('image_path')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update news</button>
    </form>
</div>
@endsection