@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Property</h1>

        <form action="/dashboard/properties" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <hr />

            <div class="mb-3">
                <label for="bedroom" class="form-label">Bedrooms</label>
                <input type="number" class="form-control" id="bedroom" name="bedroom" required>
            </div>

            <div class="mb-3">
                <label for="bathroom" class="form-label">Bathrooms</label>
                <input type="number" class="form-control" id="bathroom" name="bathroom" required>
            </div>

            <div class="mb-3">
                <label for="kitchen" class="form-label">kitchens</label>
                <input type="number" class="form-control" id="kitchen" name="kitchen" required>
            </div>

            <div class="mb-3">
                <label for="office" class="form-label">offices</label>
                <input type="number" class="form-control" id="office" name="office" required>
            </div>

            <div class="mb-3">
                <label for="garage" class="form-label">garages</label>
                <input type="number" class="form-control" id="garage" name="garage" required>
            </div>

            <div class="mb-3">
                <label for="floors" class="form-label">floors</label>
                <input type="number" class="form-control" id="floors" name="floors" required>
            </div>

            <hr />

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>

            <div class="mb-3">
                <label for="zipcode" class="form-label">Zipcodes</label>
                <input type="number" class="form-control" id="zipcode" name="zipcode" required>
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">state</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>

            <hr />

            <div class="mb-3">
                <label for="size" class="form-label">Size (sqm)</label>
                <input type="number" class="form-control" id="size" name="size" required>
            </div>

            <div class="mb-3">
                <label for="image_path" class="form-label">Main Image Source (optional)</label>
                <input type="text" class="form-control" id="image_path" name="image_path" >
            </div>

            <button type="submit" class="btn btn-primary">Add Property</button>
        </form>
    </div>
@endsection
