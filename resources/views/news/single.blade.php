@extends('layouts.public')

@section('content')

<main>

    <div class="intro-single">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                <h2 class="title-single">{{$news->title}}</h2>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a href="/" class="text-black pr-2">Home /</a>
                    </li>
                    <li class=" active" aria-current="page">
                    {{$result = implode(' ', array_slice(explode(' ', $news->title), 0, 3))}} ...
                    </li>
                </ol>
                </nav>
            </div>
            </div>
        </div>
    </div>

  
        <div class="news-single nav-arrow-b">
            <div class="container">
                <div class="row">
                <div class="col-sm-12">
                    <div class="news-img-box">
                    <img src="{{$news->image_path}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                    <ul class="list-inline text-center color-a">
                        <li class="list-inline-item mr-2">
                        <strong>Author: </strong>
                        <span class="color-text-a">{{$news->author}}</span>
                        </li>
                        <li class="list-inline-item mr-2">
                        <strong>Category: </strong>
                        <span class="color-text-a">{{$news->category}}</span>
                        </li>
                        <li class="list-inline-item">
                        <strong>Date: </strong>
                        <span class="color-text-a">{{$news->updated_at}}</span>
                        </li>
                    </ul>
                    </div>
                    <div class="post-content color-text-a">
                    <p class="post-intro">
                       {{$news->body}}
                    </p>
                    </div>
                    <div class="post-footer">
                    <div class="post-share">
                        <span>Share: </span>
                        <ul class="list-inline socials">
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                            <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>

</main>


@endsection