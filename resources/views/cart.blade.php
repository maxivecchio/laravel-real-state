@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <h1 class="mx-3">Cart: ${{ number_format($cartItems->sum('property.price')) }}</h1>

            <div class="row">
            @if (count($cartItems) > 0)
                        @foreach ($cartItems as $cartItem)
                           
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="property-item mb-30">
                                    <a href="/properties/{{$cartItem->property->id}}" class="img">
                                        <img src="{{ $cartItem->property->image_path }}" alt="Image" class="img-fluid">
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>${{ number_format($cartItem->property->price) }}</span></div>
                                            <div>
                                                <span class="d-block mb-2 text-black-50">{{ $cartItem->property->address }}</span>
                                                <span>sqm: {{ number_format($cartItem->property->size) }}</span>
                                                <span class="city d-block mb-3">{{ $cartItem->property->city }}, {{ $cartItem->property->country }}</span>
                                                <div class="specs d-flex mb-4 flex-wrap gap-3">
                                                    <span class="d-flex align-items-center">
                                                        <span class="icon-bed me-2"></span>
                                                        <span class="caption">{{ $cartItem->property->characteristics->bedroom }}</span>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <span class="icon-bath me-2"></span>
                                                        <span class="caption">{{ $cartItem->property->characteristics->bathroom }}</span>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <span class="fa-solid fa-warehouse me-2"></span>
                                                        <span class="caption">{{ $cartItem->property->characteristics->garage }}</span>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <span class="fa-solid fa-stairs me-2"></span>
                                                        <span class="caption">{{ $cartItem->property->characteristics->floors }}</span>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <span class="fa-solid fa-kitchen-set me-2"></span>
                                                        <span class="caption">{{ $cartItem->property->characteristics->floors }}</span>
                                                    </span>
                                                </div>
                                                <form action="/cart/{{ $cartItem->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                <form action="/orders" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Process Checkout</button>
                </form>

            @else
                <p>No hay elementos en el carrito.</p>
            @endif
        </div>
    </div>
@endsection