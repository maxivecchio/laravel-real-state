@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All News</h1>
		<a class='createPropertyButton' href="/dashboard/news/create">Publish News</a>
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
        <div class="row">
            @foreach ($news as $newsItem)
                <div class="col-md-6">
                        <div class="card-box-b card-shadow news-box mb-4">
                        <div class="img-box-b">
                            <img src="{{ $newsItem->image_path}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a class="category-b">{{ $newsItem->category }}</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                    <span class="text-white">{{ $newsItem->title }}</span>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">{{ $newsItem->updated_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='actionsNewsDashboard'>
                        <a class='editPropertyButton' href="/dashboard/news/{{ $newsItem->id }}/edit">Edit</a>
    						<form method="POST" action="/dashboard/news/{{ $newsItem->id }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class='deletePropertyButton'>Delete</button>
                            </form>
                    </div>
                </div>                    
            @endforeach
    </div>
    </div>
@endsection