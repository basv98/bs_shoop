@extends('layout.app')
@extends('layout.navbar')
@section('content')
    <section style="margin-top: 100px;">
        <div class="container">
            <div class="text-center pb-4">
                <h1>Total pagar</h1>
                <h5>${{ number_format($mount) }} COP</h5>
            </div>
            @if (session('response'))
                <div class="alert alert-danger" role="alert">
                    {{ session('response') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/credit-card-2061889-0.svg') }}" alt="">
                </div>
                <div class="col-md-6 my-auto">
                    <form action="{{ route('pay') }}" method="post">
                        <div class="row">
                            @csrf
                            <input type="hidden" id="invoce_id" name="invoce_id" value="{{ request()->id }}">
                            <h3>Datos Tarjeta</h3>
                            <div class="mb-3 col-md-12">
                                <label for="nombre_cliente" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control @error('nombre_cliente') is-invalid @enderror"
                                    maxlength="100" name="nombre_cliente" id="nombre_cliente" placeholder="Nombres">
                                @error('nombre_cliente')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="numero_tarjeta" class="form-label">Número tarjera</label>
                                <input type="text" class="form-control @error('numero_tarjeta') is-invalid @enderror"
                                    maxlength="16" name="numero_tarjeta" id="numero_tarjeta"
                                    placeholder="XXXX - XXXX - XXXX - XXXX">
                                @error('numero_tarjeta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="mes" class="form-label">MES</label>
                                <input type="text" class="form-control @error('mes') is-invalid @enderror" maxlength="2"
                                    name="mes" id="mes" placeholder="MM">
                                @error('mes')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="anio" class="form-label">AÑO</label>
                                <input type="text" class="form-control @error('anio') is-invalid @enderror" maxlength="4"
                                    name="anio" id="anio" placeholder="YYYY">
                                @error('anio')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-2">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="password" class="form-control @error('cvv') is-invalid @enderror" maxlength="4"
                                    name="cvv" id="cvv" placeholder="***">
                                @error('cvv')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-primary btn-lg btn-block my-4" type="submit">Pagar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
