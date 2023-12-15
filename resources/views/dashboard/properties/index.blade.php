@extends('layouts.app')

@section('content')
    <div class="container">
		<h1>All Properties</h1>
		<a class='createPropertyButton' href="/dashboard/properties/create">Create New Property</a>
		@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
		@endif
		@if (session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
		@endif
        <div class='row'>
            @foreach ($properties as $property)
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="property-item mb-30">
						<a class="img">
							<img src="{{ $property->image_path }}" alt="Image" class="img-fluid">
						</a>

						<div class="property-content">
							<div class="price mb-2"><span>${{ number_format($property->price) }}</span></div>
							<div> 
								<span class="d-block mb-2 text-black-50">{{{ $property->address }}}</span>
								<span class="city d-block mb-3">{{ $property->city }}, {{ $property->country }}</span>
								<a class='editPropertyButton' href="/dashboard/properties/{{ $property->id }}/edit">Edit</a>
								<form method="POST" action="/dashboard/properties/{{ $property->id }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class='deletePropertyButton'>Delete</button>
                                </form>
							</div>
						</div>
					</div> <!-- .item -->
				</div>
            @endforeach
		</div>
    </div>
@endsection
