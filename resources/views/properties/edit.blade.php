<h1>Edit Property</h1>

<form method="POST" action="{{ route('properties.update', $property) }}">
    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $property->title }}" required>

    <label for="description">Description</label>
    <textarea name="description" id="description" rows="4" required>{{ $property->description }}</textarea>

    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{ $property->price }}" required>

    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="{{ $property->location }}" required>

    <label for="bedrooms">Bedrooms</label>
    <input type="number" name="bedrooms" id="bedrooms" value="{{ $property->bedrooms }}" required>

    <label for="bathrooms">Bathrooms</label>
    <input type="number" name="bathrooms" id="bathrooms" value="{{ $property->bathrooms }}" required>

    <label for="size">Size</label>
    <input type="text" name="size" id="size" value="{{ $property->size }}" required>

    <label for="status">Status</label>
    <input type="text" name="status" id="status" value="{{ $property->status }}" required>

    <label for="image_path">Image Path</label>
    <input type="text" name="image_path" id="image_path" value="{{ $property->image_path }}" required>

    <button type="submit">Update Property</button>
</form>