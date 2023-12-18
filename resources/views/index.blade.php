@extends('layouts.public')

@section('content')
    <div class="hero">


        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">Easiest way to find your dream home</h1>
                    <form action="{{ url('/search') }}" method="post"
                        class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <input type="search" name="city" class="form-control px-4"
                            placeholder="Enter city">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Popular Properties</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p><a href="/properties" class="btn btn-primary text-white py-3 px-4">View all
                            properties</a></p>
                </div>
            </div>
            <div class="row">

                <div class="col-12">


                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            @foreach ($properties as $property)
                            <div class="property-item">

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
                                        <a href="/properties/{{$property->id}}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        <div id="property-nav" class="controls" tabindex="0">
                            <span class="prev" data-controls="prev" 
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" 
                                tabindex="-1">Next</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Our Properties</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Property for Sale</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Real Estate Agent</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">House for Sale</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center  text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">Let's find home that's perfect for you</h2>
                    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur
                        similique debitis vel nisi qui reprehenderit.</p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">2M Properties</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Top Rated Agents</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Legit Properties</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">3298</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">2181</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">9316</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">7191</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
