@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <a href="/profile" class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-angle-left"></i> Go Back to Profile</a>
        <h1>Order History</h1>
        @if(count($orders) > 0)
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <a href="/orders/{{ $order->id }}" class="btn btn-info">Expand Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h3>You don't have any comparison yet.</h3>
        @endif
    </div>
@endsection