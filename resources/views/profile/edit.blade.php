@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
    <a href="/profile" class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-angle-left"></i> Go Back to Profile</a>
        
        <h1>Edit Profile</h1>

        <form action="/profile/{{ $profile->id }}" method="post">
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