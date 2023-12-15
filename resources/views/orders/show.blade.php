@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito mt-5">
        <h1>Detalles de la Orden #{{ $order->id }}</h1>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Propertyes</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>{{ $product->address }}</td>
                        <td>${{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total: ${{ $order->products->sum('price') }}</p>
        <p>Fecha de Creación: {{ $order->created_at }}</p>
    </div>
@endsection