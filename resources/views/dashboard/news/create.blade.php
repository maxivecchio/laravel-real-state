@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create News</h1>

    <form action="/dashboard/news" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input class="form-control" id="subtitle" name="subtitle" rows="4" required/>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea type="text" class="form-control" id="body" name="body" required></textarea>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>

        <div class="mb-3">
            <label for="display" class="form-label">Display</label>
            <select class="form-control" id="display" name="display">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add News</button>
    </form>
</div>
@endsection
