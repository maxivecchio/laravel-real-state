@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Property</h1>

        <form method="POST" action="/dashboard/properties/{{ $property->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}"
                    required>
            </div>

            <hr />

            <div class="mb-3">
                <label for="bedroom" class="form-label">Bedrooms</label>
                <input type="number" class="form-control" id="bedroom" name="bedroom" value="{{ $property->characteristics->bedroom }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="bathroom" class="form-label">Bathrooms</label>
                <input type="number" class="form-control" id="bathroom" name="bathroom" value="{{ $property->characteristics->bathroom }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="kitchen" class="form-label">Kitchens</label>
                <input type="number" class="form-control" id="kitchen" name="kitchen" value="{{ $property->characteristics->kitchen }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="office" class="form-label">Offices</label>
                <input type="number" class="form-control" id="office" name="office" value="{{ $property->characteristics->office }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="garage" class="form-label">Garages</label>
                <input type="number" class="form-control" id="garage" name="garage" value="{{ $property->characteristics->garage }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="floors" class="form-label">Floors</label>
                <input type="number" class="form-control" id="floors" name="floors" value="{{ $property->characteristics->floors }}"
                    required>
            </div>

            <hr />

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $property->address }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $property->city }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $property->city }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $property->type }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="zipcode" class="form-label">Zipcodes</label>
                <input type="number" class="form-control" id="zipcode" name="zipcode" value="{{ $property->zipcode }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" value="{{ $property->state }}"
                    required>
            </div>

            <hr />

            <div class="mb-3">
                <label for="size" class="form-label">Size (sqm)</label>
                <input type="number" class="form-control" id="size" name="size" value="{{ $property->size }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Update Property</button>
        </form>
    </div>
@endsection
