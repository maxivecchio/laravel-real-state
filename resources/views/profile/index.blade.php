@extends('layouts.public')

@section('content')
    <div class="container ContenedorCarrito marginTop">
        <h1 class="mx-3">Perfil</h1>

        <table class="table table-bordered mx-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>
                        <a href="/profile/{{ $profile->id }}" class="btn btn-primary">Editar Perfil</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
