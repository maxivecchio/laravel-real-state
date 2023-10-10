@extends('layouts.public')

@section('content')

<main>
    
<div
      class="hero page-inner overlay"
      style="background-image: url({{$property->image_path}})"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
            {{$property->address}}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="/properties">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                {{$property->address}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
                <img src="{{$property->image_path}}" alt="Image" class="img-fluid" />
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">{{$property->address}}</h2>
            <p class="meta">{{$property->city}}, {{$property->country}}</p>
            <div class="specs d-flex mb-4 flex-column gap-3">
               <span>sqm: {{ number_format($property->size) }}</span>
                 <span class="d-flex align-items-center">
                     <span class="icon-bed me-2"></span>
                     <span class="caption">{{ $property->bedroom }}</span>
                 </span>
                 <span class="d-flex align-items-center">
                     <span class="icon-bath me-2"></span>
                     <span class="caption">{{ $property->bathroom }}</span>
                 </span>
                 <span class="d-flex align-items-center">
                     <span class="fa-solid fa-warehouse me-2"></span>
                     <span class="caption">{{ $property->garage }}</span>
                 </span>
                 <span class="d-flex align-items-center">
                     <span class="fa-solid fa-stairs me-2"></span>
                     <span class="caption">{{ $property->floors }}</span>
                 </span>
                 <span class="d-flex align-items-center">
                     <span class="fa-solid fa-kitchen-set me-2"></span>
                     <span class="caption">{{ $property->floors }}</span>
                 </span>
             </div>
          </div>
        </div>
      </div>
    </div>

</main>


@endsection