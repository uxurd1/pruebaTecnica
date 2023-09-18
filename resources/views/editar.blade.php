@extends('plantillas/plantilla')

@section('titulo','Editar Producto')

@section('contenedor')
    <form action="{{route('productos.update',$producto->id)}}" method="post">
    @csrf
        <br>    
        <div class="card">
            <div class="card-header text-center">
                <h3 class="card-title">Editar producto </h3>
            </div>
            <br>
            <div class="card-body">
                <div class="md-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" required value="{{$producto->name}}">
                </div>
                <br>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="price" required value="{{$producto->price}}">
                </div>
                <br>
                <div class="mb-3">
                    <label for="Estatus" class="form-label">Estatus</label>
                    <select class="form-select" name="status">
                        <option value="alta" {{$producto->status == 'alta'?'selected' : ''}} >Alta</option>
                        <option value="baja" {{$producto->status == 'baja'?'selected' : ''}} >Baja</option>
                    </select>
                </div>
                <br>
                <div class="mb-3">
                    <label for="Stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" required value="{{$producto->stock}}">
                </div>
                <br>
                <a href="{{route('productos.index')}}" class="btn btn-secondary">Regresar al Listado</a>
                <button type="submit" class="btn btn-primary mb-4">Actualizar Producto</button>
            </div>
        </div>
    </form>
@endsection