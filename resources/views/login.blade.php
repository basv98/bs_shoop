@extends('layout.app')
@section('content')
    <section style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 fondo-container mx-auto my-5">
                    <div class="row">
                        <div class="col-md-12 bg-dark p-2" style="border-radius: 15px 15px 0 0;">
                            <img src="{{ asset('img/wolf.png') }}" alt="" width="30" class="float-start">
                            <p class="text-white text-center h3">BS SHOP</p>
                        </div>
                    </div>
                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <button class="btn btn-outline-dark btn-block" type="button">Ingresar</button>
                    <button class="btn btn-outline-danger btn-block" type="button">Olvidé mi contraseña</button>
                </div>
            </div>
        </div>
    </section>
@endsection
