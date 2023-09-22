<?php
$images = [
  "home" => ['img/gallery/home-1.jpg', 'img/gallery/home-2.jpg', 'img/gallery/home-3.jpg'],
  "vacation" => ['img/gallery/vacation-1.jpg', 'img/gallery/vacation-2.jpg', 'img/gallery/vacation-3.jpg'],
  "beach" => ['img/gallery/beach-1.jpg', 'img/gallery/beach-2.jpg', 'img/gallery/beach-3.jpg']
];
?>

@extends('layout')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Gallery</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Gallery</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="gallery-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-home">Home</li>
            <li data-filter=".filter-beach">Beach</li>
            <li data-filter=".filter-vacation">Vacation</li>
          </ul>
        </div>
      </div>

      <div class="row gallery-container">
        @foreach([1, 2, 3] as $imageNumber)
        @foreach($images as $category => $imageList)
        @if(isset($imageList[$imageNumber - 1]))
        <div class="col-lg-4 col-md-6 gallery-item filter-{{ $category }}">
          <div class="gallery-wrap">
            <img src="{{ asset($imageList[$imageNumber - 1]) }}" class="img-fluid" alt="">
            <div class="gallery-info">
              <h4>{{ ucfirst($category) }} {{ $imageNumber }}</h4>
              <p>{{ ucfirst($category) }}</p>
              <div class="gallery-links">
                <a href="{{ asset($imageList[$imageNumber - 1]) }}" class="glightbox" title="{{ ucfirst($category) }} {{ $imageNumber }}"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        @endforeach
      </div>

    </div>
  </section><!-- End Gallery Section -->

</main><!-- End #main -->
@endsection