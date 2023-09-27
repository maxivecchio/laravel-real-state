@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>news</h1>
        <ul>
            @foreach ($news as $new)
                <li>
                    {{ $new->title }}
                    <form method="POST" action="{{ route('news.destroy', $new->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta propiedad?')">Delete</button>
                    </form>
                    <a href="{{ route('news.edit', $new) }}">Edit</a>
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