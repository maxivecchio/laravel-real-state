@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <h1 class="mx-3">Edit Profile</h1>

        <form action="/profile/{{ $profile->id }}" method="post" class="mx-3">
            @csrf
            @method('PUT')

            <div class="form-group my-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $profile->name }}" required>
            </div>

            <div class="form-group my-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $profile->email }}" required>
            </div>

            <div class="form-group my-3">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
@endsection