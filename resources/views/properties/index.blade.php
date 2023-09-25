@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Propiedades</h1>
        <ul>
            @foreach($properties as $property)
                <li>{{ $property->title }} - {{ $property->location }} - ${{ $property->price }}</li>
            @endforeach
        </ul>
    </div>
@endsection
