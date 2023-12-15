@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <h1 class="mx-3">Cart</h1>

        <div class="mx-3">
            @if (count($cartItems) > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Property</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cartItem)
                            <tr>
                                <td>{{ $cartItem->property->address }}</td>
                                <td>${{ $cartItem->property->price }}</td>
                                <td>
                                    <form action="/cart/{{ $cartItem->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p>Total: ${{ $cartItems->sum('property.price') }}</p>

                <form action="/orders" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Comprar</button>
                </form>

            @else
                <p>No hay elementos en el carrito.</p>
            @endif
        </div>
    </div>
@endsection