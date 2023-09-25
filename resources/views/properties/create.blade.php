@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Property</h1>

    <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>

        <div class="mb-3">
            <label for="bedrooms" class="form-label">Bedrooms</label>
            <input type="number" class="form-control" id="bedrooms" name="bedrooms" required>
        </div>

        <div class="mb-3">
            <label for="bathrooms" class="form-label">Bathrooms</label>
            <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Size (sqm)</label>
            <input type="number" class="form-control" id="size" name="size" required>
        </div>

        <div class="mb-3">
            <label for="status_id" class="form-label">Status</label>
            <select class="form-control" id="status_id" name="status_id">
                <option value="1">Purchased</option>
                <option value="2">For Rent</option>
                <option value="3">To Buy</option>
                <option value="4">For Sale</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Add Property</button>
    </form>
</div>
@endsection
