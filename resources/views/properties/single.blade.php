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
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="properties.html">Properties</a>
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
            <!-- <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
              laborum quo quos omnis sed magnam id, ducimus saepe, debitis error
              earum, iste dicta odio est sint dolorem magni animi tenetur.
            </p>
            <p class="text-black-50">
              Perferendis eligendi reprehenderit, assumenda molestias nisi eius
              iste reiciendis porro tenetur in, repudiandae amet libero.
              Doloremque, reprehenderit cupiditate error laudantium qui, esse
              quam debitis, eum cumque perferendis, illum harum expedita.
            </p> -->          
          </div>
        </div>
      </div>
    </div>

</main>


@endsection