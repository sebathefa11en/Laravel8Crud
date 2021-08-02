<h1>Crear Producto</h1>

@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-12"></div>
    <h1>Crear Productos</h1>
</div>

<div class="row pt-4">
    <div class="">
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                      </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description"></textarea>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select type="text" class="form-control" id="status" name="status">
                            <option value="new">Nuevo</option>
                            <option value="used">Usado</option>
                            <option value="broken">Roto</option>
                        </select>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="warranty" class="form-label">Garantia</label>
                        <select type="text" class="form-control" id="warranty" name="warranty">
                            <option value="yes">Si</option>
                            <option value="no">No</option>
                        </select>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="images">Imágenes</label>
                        <input type="file" class="form-control-file" id="images" multiple name="image[]">
                      </div>
                </div>
            </div>
            <div class="col-md-12 flex-row justify-content-end align-item-end">
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="/store" class="btn btn-secondary">Volver</a>
            </div>

          </form>
    </div>
</div>
</div>
@endsection
