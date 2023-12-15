@extends('layouts.app')

@section('content')
    <div class="container ContenedorCarrito">
        <h1 class="mx-3">Órdenes del Usuario: {{ $user->name }}</h1>

        <div class="table-responsive mx-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID de Orden</th>
                        <th>Fecha de Creación</th>
                        <th>Propiedades</th>
                        <th>Precio Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <ul>
                                    @foreach ($order->products as $product)
                                        <li>{{ $product->address }} (${{ $product->price }} USD.)</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $order->products->sum('price') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay órdenes para este usuario.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection