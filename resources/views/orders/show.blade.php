@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <a href="/orders" class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-angle-left"></i> Go Back to Orders</a>
        <h1>Order #{{ $order->id }}: ${{ number_format($order->products->sum('price')) }}</h1>
        <p class="totalCart">{{ $order->created_at }}</p>
            @foreach($order->products as $property)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="property-item mb-30">
                            <a href="/properties/{{$property->id}}" class="img">
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
                        </div>
                @endforeach
        </div>
@endsection