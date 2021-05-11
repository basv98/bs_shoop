@extends('layout.app')
@extends('layout.navbar')
@section('content')
<section style="margin-top: 100px;">
    <div class="container">
        <div class="text-center pb-4">
            <h1>Total pagar</h1>
            <h5>$50.000 COP</h5>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/credit-card-2061889-0.svg')}}" alt="">
            </div>
            <div class="col-md-6 my-auto">
                <div class="row">
                    <h3>Datos Tarjeta</h3>
                    <div class="mb-3 col-md-12">
                        <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombres">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Número tarjera</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Número tarjeta">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="exampleFormControlInput1" class="form-label">MES</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="MES">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="exampleFormControlInput1" class="form-label">AÑO</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="AÑO">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="exampleFormControlInput1" class="form-label">CVV</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="CVV">
                    </div>
                    <div class="d-grid gap-2 my-5">
                        <button class="btn btn-primary" onclick="mensajeExitoso('Compra realizada')" type="button">Pagar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection