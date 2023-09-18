@extends('plantillas/plantilla')

@section('titulo','Crear Producto')

@section('contenedor')
    <form action="{{route('productos.store')}}" method="post">
        @csrf
        <br>    
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Añadir producto </h3>
            </div>
            <div class="card-body">
                <div class="md-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" step="any" name="price" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="Estatus" class="form-label">Estatus</label>
                    <select class="form-select" name="status">
                        <option value="alta">Alta</option>
                        <option value="baja">Baja</option>
                    </select>
                </div>
                <br>
                <div class="mb-3">
                    <label for="Stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" required>
                </div>
                <br>
                <a href="{{route('productos.index')}}" class="btn btn-secondary">Regresar al Listado</a>
                <button type="submit" class="btn btn-primary">Añandir Producto</button>
            </div>
        </div>
    </form>
@endsection