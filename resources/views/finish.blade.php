@extends('layout.app')
@extends('layout.navbar')
@section('content')
    <section style="margin-top: 100px;">
        <div class="container">
            <h1 class="text-center">Compra exitosa</h1>
            <div class="row">
                <div class="col-md-12 my-5">
                    <img class="rounded mx-auto d-block img-fluid" src="{{ asset('img/finished.svg') }}" width="75%" style="height: 450px;" alt="">
                </div>
            </div>
            <button type="button" onclick="(window.location = '{{route('home')}}')" class="btn btn-primary btn-lg btn-block mx-5">Seguir comprando</button>
        </div>
    </section>
@endsection
