@extends('layouts.public')

@section('content')
    <div class="marginTop section section-properties">
        <div class="container">
            <div class="row">
                @if(count($properties) > 0)
                    @foreach ($properties as $property)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="property-item mb-30">
                                <a href="property-single.html" class="img">
                                    <img src="{{ $property->image_path }}" alt="Image" class="img-fluid">
                                </a>
                                <div class="property-content">
                                    <div class="price mb-2"><span>${{ number_format($property->price) }}</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">{{ $property->address }}</span>
                                        <span>sqm: {{ number_format($property->size) }}</span>
                                        <span class="city d-block mb-3">{{ $property->city }}, {{ $property->country }}</span>
                                        <div class="specs d-flex mb-4 flex-wrap gap-3">
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
                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            Properties not found.
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection