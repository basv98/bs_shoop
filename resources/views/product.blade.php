@extends('layout.app')
@extends('layout.navbar')
@section('content')
    <section style="margin-top: 100px;">
        <div class="container">
            @if (session('response'))
                <div class="alert alert-success" role="alert">
                    {{ session('response') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($product->imagenes as $imagen)
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{ asset($imagen->url) }}" class="d-block w-100">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <h2>{{ $product->product_name }}</h2>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('createInvoce') }}" method="post">
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                        @csrf
                        <div class="card">
                            <h3 class="card-header">Datos personales</h3>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="nombre_cliente" class="form-label">Nombres</label>
                                        <input type="text"
                                            class="form-control @error('nombre_cliente') is-invalid @enderror"
                                            name="nombre_cliente" id="nombre_cliente" maxlength="50" placeholder="Nombres">
                                        @error('nombre_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="cedula_cliente"
                                            class="form-label @error('cedula_cliente') is-invalid @enderror">Cédula</label>
                                        <input type="text" class="form-control" maxlength="10" name="cedula_cliente" id="cedula_cliente"
                                            placeholder="Número de documento">
                                        @error('cedula_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="telefono_cliente"
                                            class="form-label @error('telefono_cliente') is-invalid @enderror">Teléfono</label>
                                        <input type="text" class="form-control" name="telefono_cliente"
                                            id="telefono_cliente" placeholder="Teléfono" maxlength="10"> 
                                        @error('telefono_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="correo_cliente"
                                            class="form-label @error('correo_cliente') is-invalid @enderror">Correo</label>
                                        <input type="email" class="form-control" name="correo_cliente" id="correo_cliente" maxlength="20"
                                            placeholder="Correo">
                                        @error('correo_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="direccion_cliente"
                                            class="form-label @error('direccion_cliente') is-invalid @enderror">Dirección</label>
                                        <input type="text" class="form-control" name="direccion_cliente"
                                            id="direccion_cliente" placeholder="Dirección" maxlength="40">
                                        @error('direccion_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <h3 class="card-header">Datos del producto</h3>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="custom-select @error('cantidad_producto') is-invalid @enderror"
                                            id="cantidad_producto" name="cantidad_producto">
                                            <option value="" selected>Seleccione...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="letra-detalle">Disponibles: {{ $product->stock }}</span>
                                        @error('cantidad_producto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 align-self-end">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="envio_premiun"
                                                name="envio_premiun">
                                            <label class="custom-control-label" for="envio_premiun">Envio Premiun</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block my-auto">Ir a pagar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 m-3">
                    <h3 class="text-center">Valoraciones</h3>
                </div>
                <div class="col-md-12">
                    @foreach ($product->comments as $comment)
                        <figure>
                            <blockquote class="blockquote">
                                <p>{{ $comment->comment }}</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                {{$comment->usuario->name}}
                            </figcaption>
                            <div class="d-inline-block">
                                <p class="clasificacion">
                                    <input type="radio" name="estrellas{{ $comment->id }}"
                                        {{ $comment->punctuation == 5 ? 'checked' : '' }} value="5">
                                    <label>★</label>
                                    <input type="radio" name="estrellas{{ $comment->id }}"
                                        {{ $comment->punctuation == 4 ? 'checked' : '' }} value="4">
                                    <label>★</label>
                                    <input type="radio" name="estrellas{{ $comment->id }}"
                                        {{ $comment->punctuation == 3 ? 'checked' : '' }} value="3">
                                    <label>★</label>
                                    <input type="radio" name="estrellas{{ $comment->id }}"
                                        {{ $comment->punctuation == 2 ? 'checked' : '' }} value="2">
                                    <label>★</label>
                                    <input type="radio" name="estrellas{{ $comment->id }}"
                                        {{ $comment->punctuation == 1 ? 'checked' : '' }} value="1">
                                    <label>★</label>
                                </p>
                            </div>
                            <hr>
                        </figure>
                    @endforeach
                    <form action="{{ route('comment') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="col-md-12 mb-5">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escribe tu comentario aquí" name="comment"
                                    id="comment" maxlength="500"></textarea>
                                <label for="floatingTextarea">Comentario</label>
                            </div>
                            <div class="d-inline-block float-start p-2">
                                <p class="clasificacion">
                                    <input id="radio134" type="radio" name="punctuation" value="5">
                                    <label for="radio134">★</label>
                                    <input id="radio234" type="radio" name="punctuation" value="4">
                                    <label for="radio234">★</label>
                                    <input id="radio334" type="radio" name="punctuation" value="3">
                                    <label for="radio334">★</label>
                                    <input id="radio434" type="radio" name="punctuation" value="2">
                                    <label for="radio434">★</label>
                                    <input id="radio534" type="radio" name="punctuation" value="1">
                                    <label for="radio534">★</label>
                                </p>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                <button class="btn btn-primary" type="submit">Agregar puntuacion</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
