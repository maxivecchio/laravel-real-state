@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Properties</h1>
        <ul>
            @foreach ($properties as $property)
                <li>
                    {{ $property->title }}
                    <form method="POST" action="{{ route('properties.deleteProperty', $property->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta propiedad?')">Delete</button>
                    </form>
                    <a href="{{ route('properties.edit', $property) }}">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
@endsection