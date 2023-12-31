@extends('layouts.public')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg');">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Properties</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item "><a href="/">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">Properties</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section section-properties">
    <div class="container">
        <div class="row">
            @foreach ($properties as $property)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">

                    <a href="/properties/{{$property->id}}" class="img">
                        <img src="{{ $property->image_path}}" alt="Image" class="img-fluid">
                    </a>

                    <div class="property-content">
                        <div class="price mb-2"><span>${{ number_format($property->price) }}</span> </div>
                        <div>
                            <span class="d-block mb-2 text-black-50"> {{ $property->address }}</span>
                            <span>sqm: {{ number_format($property->size) }}</span>
                            <span class="city d-block mb-3">{{ $property->city }}, {{ $property->country }}</span>

                            <div class="specs d-flex mb-4 flex-wrap gap-3">
                                <span class="d-flex align-items-center">
                                    <span class="icon-bed me-2"></span>
                                    <span class="caption">{{ $property->characteristics->bedroom }}</span>
                                </span>
                                <span class="d-flex align-items-center">
                                    <span class="icon-bath me-2"></span>
                                    <span class="caption">{{ $property->characteristics->bathroom }}</span>
                                </span>
                                <span class="d-flex align-items-center">
                                    <span class="fa-solid fa-warehouse me-2"></span>
                                    <span class="caption">{{ $property->characteristics->garage }}</span>
                                </span>
                                <span class="d-flex align-items-center">
                                    <span class="fa-solid fa-stairs me-2"></span>
                                    <span class="caption">{{ $property->characteristics->floors }}</span>
                                </span>
                                <span class="d-flex align-items-center">
                                    <span class="fa-solid fa-kitchen-set me-2"></span>
                                    <span class="caption">{{ $property->characteristics->floors }}</span>
                                </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/properties/{{$property->id}}" class="btn btn-primary py-2 px-3">See details</a>
                                
                                <form action="/comparisons" method="POST" class="ml-2">
                                    @csrf
                                    <input type="hidden" name="property1_id" value="{{ $property->id }}">
                                    <button type="submit" class="btn btn-secondary py-2 px-3">Compare</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection