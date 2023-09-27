@extends('layouts.app')

@section('content')
<div class="container">
    <h1>TODAS PUTAS</h1>

    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">subtitle</label>
            <textarea class="form-control" id="subtitle" name="subtitle" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">body</label>
            <input type="text" class="form-control" id="body" name="body" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">image_path</label>
            <input type="text" class="form-control" id="image_path" name="image_path" required>
        </div>

        <div class="mb-3">
            <label for="display" class="form-label">display</label>
            <select class="form-control" id="display" name="display">
                <option value="1">true</option>
                <option value="0">false</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
</div>
@endsection
