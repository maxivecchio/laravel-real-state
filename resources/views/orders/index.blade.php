@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito mt-5">
        <h1>Mis Órdenes</h1>

        @if(count($orders) > 0)
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID de Orden</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <a href="/orders/{{ $order->id }}" class="btn btn-info">Detalles</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No tienes órdenes.</p>
        @endif
    </div>
@endsection