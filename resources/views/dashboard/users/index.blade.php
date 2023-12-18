@extends('layouts.app')

@section('content')
    <div class="container ContenedorCarrito">
        <h1 class="mx-3">Customers List</h1>

        <div class="table-responsive mx-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/dashboard/users/orders/{{ $user->id }}" class="btn btn-primary">View Orders</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection