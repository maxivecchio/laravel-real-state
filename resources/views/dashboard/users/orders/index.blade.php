@extends('layouts.app')

@section('content')
    <div class="container ContenedorCarrito">
        <h1 class="mx-3">Orders: {{ $user->email }}</h1>

        <div class="table-responsive mx-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Date</th>
                        <th>Properties</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <ul>
                                    @foreach ($order->products as $property)
                                        <li>{{ $property->address }} (${{ $property->price }} USD.)</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $order->products->sum('price') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection