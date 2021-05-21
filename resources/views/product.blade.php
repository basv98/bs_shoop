@extends('layout.app')
@extends('layout.navbar')
@section('content')
    <section style="margin-top: 100px;">
        <div class="container">
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
                                            name="nombre_cliente" id="nombre_cliente" placeholder="Nombres">
                                        @error('nombre_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="cedula_cliente"
                                            class="form-label @error('cedula_cliente') is-invalid @enderror">Cédula</label>
                                        <input type="text" class="form-control" name="cedula_cliente" id="cedula_cliente"
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
                                            id="telefono_cliente" placeholder="Teléfono">
                                        @error('telefono_cliente')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="correo_cliente"
                                            class="form-label @error('correo_cliente') is-invalid @enderror">Correo</label>
                                        <input type="email" class="form-control" name="correo_cliente" id="correo_cliente"
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
                                            id="direccion_cliente" placeholder="Dirección">
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
                    <figure>
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Brayan Schoonewolff
                        </figcaption>
                        <div class="d-inline-block">
                            <p class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>
                        </div>
                        <hr>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Brayan Schoonewolff
                        </figcaption>
                        <div class="d-inline-block">
                            <p class="clasificacion">
                                <input id="radio12" type="radio" name="estrellas2" value="5">
                                <label for="radio12">★</label>
                                <input id="radio22" type="radio" name="estrellas2" value="4">
                                <label for="radio22">★</label>
                                <input id="radio32" type="radio" name="estrellas2" value="3">
                                <label for="radio32">★</label>
                                <input id="radio42" type="radio" name="estrellas2" value="2">
                                <label for="radio42">★</label>
                                <input id="radio52" type="radio" name="estrellas2" value="1">
                                <label for="radio52">★</label>
                            </p>
                        </div>
                        <hr>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Brayan Schoonewolff
                        </figcaption>
                        <div class="d-inline-block">
                            <p class="clasificacion">
                                <input id="radio13" type="radio" name="estrella3" value="5">
                                <label for="radio13">★</label>
                                <input id="radio23" type="radio" name="estrella3" value="4">
                                <label for="radio23">★</label>
                                <input id="radio33" type="radio" name="estrella3" value="3">
                                <label for="radio33">★</label>
                                <input id="radio43" type="radio" name="estrella3" value="2">
                                <label for="radio43">★</label>
                                <input id="radio53" type="radio" name="estrella3" value="1">
                                <label for="radio53">★</label>
                            </p>
                        </div>
                        <hr>
                    </figure>
                </div>

                <div class="col-md-12 mb-5">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comentario</label>
                    </div>
                    <div class="d-inline-block float-start p-2">
                        <p class="clasificacion">
                            <input id="radio13" type="radio" name="estrella3" value="5">
                            <label for="radio13">★</label>
                            <input id="radio23" type="radio" name="estrella3" value="4">
                            <label for="radio23">★</label>
                            <input id="radio33" type="radio" name="estrella3" value="3">
                            <label for="radio33">★</label>
                            <input id="radio43" type="radio" name="estrella3" value="2">
                            <label for="radio43">★</label>
                            <input id="radio53" type="radio" name="estrella3" value="1">
                            <label for="radio53">★</label>
                        </p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                        <button class="btn btn-primary" type="button">Agregar puntuacion</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
