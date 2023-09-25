@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Agregar Propiedad</h2>
        <form method="POST" action="{{ route('propiedades.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Campos del formulario -->
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="location">Ubicación</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>

            <div class="form-group">
                <label for="bedrooms">Dormitorios</label>
                <input type="number" class="form-control" id="bedrooms" name="bedrooms" required>
            </div>

            <div class="form-group">
                <label for="bathrooms">Baños</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
            </div>

            <div class="form-group">
                <label for="size">Tamaño</label>
                <input type="text" class="form-control" id="size" name="size" required>
            </div>

            <div class="form-group">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="form-group">
                <label for="status">Estado</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>

            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Propiedad</button>
        </form>
    </div>
@endsection
