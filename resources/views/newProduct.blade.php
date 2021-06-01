@extends('layout.app')
@extends('layout.navbar')
@section('content')
    <div class="container" style="margin-top: 100px;">
        <form action="#" method="post" enctype="multipart/form-data">
            @error('image_product')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-md-6 my-auto">
                    <div class="container-image">
                        <input type="file" class="d-none" name="image_product" id="image_product">
                        <div class="load-image mx-auto cursor-pointer"
                            onclick="document.querySelector('#image_product').click()" title="Subir imagen">
                            <span class="mx-auto">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @csrf
                    <div class="card">
                        <h3 class="card-header">Datos del producto</h3>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="product_name" class="form-label">Nombre del producto</label>
                                    <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                        name="product_name" id="product_name" maxlength="50" placeholder="Nombre">
                                    @error('product_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="category_id" class="form-label">Categoría</label>
                                    <select class="custom-select @error('category_id') is-invalid @enderror"
                                        id="category_id" name="category_id">
                                        <option value="" selected>Seleccione...</option>
                                        @foreach ($categories as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->description }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="price"
                                        class="form-label @error('price') is-invalid @enderror">Precio</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="Precio"
                                        maxlength="10">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="stock" class="form-label @error('stock') is-invalid @enderror">Stock</label>
                                    <input type="text" class="form-control" name="stock" id="stock" maxlength="20"
                                        placeholder="Stock">
                                    @error('stock')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Escribe una descripción aquí"
                                            name="description" id="description" maxlength="500"></textarea>
                                    </div>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block my-5">Subir</button>
                </div>
            </div>
        </form>
    </div>
@endsection
