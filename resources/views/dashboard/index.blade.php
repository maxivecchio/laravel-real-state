@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body d-block gap-4 d-sm-flex justify-content-around">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('properties.index') }}" class='manageButton'>Manage Properties</a>
                        <a href="{{ route('news.index') }}" class='manageButton'>Manage News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
