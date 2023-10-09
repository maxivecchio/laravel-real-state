@extends('layouts.public')

@section('content')

<section class="news-grid grid margenArriba mb-5">
  <div class="container">
  <div class="row">

  @foreach($news as $newsItem)
  @if($newsItem->display==1)
  <div class="col-md-4">

    <div class="card-box-b card-shadow news-box mb-4">
    <div class="img-box-b">
      <img src="{{ $newsItem->image_path}}" alt="" class="img-b img-fluid">
      </div>
      <div class="card-overlay">
        <div class="card-header-b">
          <div class="card-category-b">
            <a href="#" class="category-b">Travel</a>
          </div>
          <div class="card-title-b">
            <h2 class="title-2">
              <a href="blog-single.html">{{ $newsItem->title }}
                <br> new</a>
            </h2>
          </div>
          <div class="card-date">
            <span class="date-b">{{ $newsItem->updated_at }}</span>
          </div>
        </div>
      </div>
    </div>
    </div>
    @endif
    @endforeach
  </div>
  </div>
</section>

@endsection