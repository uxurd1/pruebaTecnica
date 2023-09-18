@extends('plantillas/plantilla')

@section('titulo','Productos')

@section('contenedor')
    <div class ="card">
        <br>
        <div class="card-header text-center">
            <h3 class="card-title">Productos</h3>
        </div>
        <div class="card-body">
            <div class="col-md-5">
                <a name="newProducto" id="newProducto" class="btn btn-primary" href="{{route('productos.create')}}" role="button">Añadir Producto</a>
            </div>
            <div class="col-md-5">
                <div class="table table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Estatus</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                            <tr>
                                <td>{{$producto->name}}</td>
                                <td>{{$producto->price}}</td>
                                <td>{{$producto->status}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>
                                    <a name="editProducto" id="editProducto" class="btn btn-warning" href="{{route('productos.edit',$producto->id)}}" role="button">Editar</a>
                                    <a name="eliminarProducto" id="eliminarProducto" class="btn btn-danger" href="{{route('productos.destroy',$producto->id)}}" role="button">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection