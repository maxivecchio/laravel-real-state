@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <h1 class="mx-3">My Profile</h1>

        <table class="table table-bordered mx-3">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>
                        <a href="/profile/{{ $profile->id }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="card mx-3">
                    <div class="card-header">Other</div>

                    <div class="card-body d-block gap-4 d-sm-flex justify-content-around">
                        <a href="/comparisons" class='manageButton'>Comparison History</a>
                        <a href="/orders" class='manageButton'>Order History</a>
                    </div>
                </div>
    </div>
@endsection
