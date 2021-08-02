@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Tienda de Zapatos</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a class="btn btn-outline-primary" href="/store/create">Crear Producto</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Estado</th>
                <th scope="col">Garantia</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->status}}</td>
                    <td>{{$product->warranty}}</td>
                    <td>
                        <form action="/store/{{$product->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/store/{{$product->id}}/edit" class="btn btn-success">
                                Editar
                            </a>
                            <button type="submit" class="btn btn-danger" onclick="confirm('¿Está seguro de querer eliminar el producto?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>

@endsection
