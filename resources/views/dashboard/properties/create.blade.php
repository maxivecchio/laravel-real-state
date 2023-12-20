@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Property</h1>

        <form action="/dashboard/properties" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror"  value="{{ old('price') }}"  id="price" name="price">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <hr />

            <div class="mb-3">
                <label for="bedroom" class="form-label">Bedrooms</label>
                <input type="number" class="form-control @error('bedroom') is-invalid @enderror"  value="{{ old('bedroom') }}"  id="bedroom" name="bedroom">
                @error('bedroom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bathroom" class="form-label">Bathrooms</label>
                <input type="number" class="form-control @error('bathroom') is-invalid @enderror"  value="{{ old('bathroom') }}"  id="bathroom" name="bathroom">
                @error('bathroom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kitchen" class="form-label">kitchens</label>
                <input type="number" class="form-control @error('kitchen') is-invalid @enderror"  value="{{ old('kitchen') }}"  id="kitchen" name="kitchen">
                @error('kitchen')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="office" class="form-label">offices</label>
                <input type="number" class="form-control @error('office') is-invalid @enderror"  value="{{ old('office') }}"  id="office" name="office">
                @error('office')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="garage" class="form-label">garages</label>
                <input type="number" class="form-control @error('office') is-invalid @enderror"  value="{{ old('garage') }}"  id="garage" name="garage">
                @error('office')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="floors" class="form-label">floors</label>
                <input type="number" class="form-control @error('floors') is-invalid @enderror"  value="{{ old('floors') }}"  id="floors" name="floors">
                @error('floors')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <hr />

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror"  value="{{ old('address') }}"  id="address" name="address">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">city</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror"  value="{{ old('city') }}"  id="city" name="city">
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror"  value="{{ old('type') }}"  id="type" name="type">
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror"  value="{{ old('country') }}"  id="country" name="country">
                @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="zipcode" class="form-label">Zipcodes</label>
                <input type="number" class="form-control @error('zipcode') is-invalid @enderror"  value="{{ old('zipcode') }}"  id="zipcode" name="zipcode">
                @error('zipcode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">state</label>
                <input type="text" class="form-control @error('state') is-invalid @enderror"  value="{{ old('state') }}"  id="state" name="state">
                @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <hr />

            <div class="mb-3">
                <label for="size" class="form-label">Size (sqm)</label>
                <input type="number" class="form-control @error('size') is-invalid @enderror"  value="{{ old('size') }}"  id="size" name="size">
                @error('size')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image_path" class="form-label">Main Image Source (optional)</label>
                <input type="text" class="form-control @error('image_path') is-invalid @enderror"  value="{{ old('image_path') }}"  id="image_path" name="image_path" >
                @error('image_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Property</button>
        </form>
    </div>
@endsection
