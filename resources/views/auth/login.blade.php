@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 border mx-auto my-5">
                            <div class="row">
                                <div class="col-md-12 bg-dark p-2" style="border-radius: 15px 15px 0 0;">
                                    <img src="{{ asset('img/wolf.png') }}" alt="" width="30" class="float-start">
                                    <p class="text-white text-center h3">BS SHOP</p>
                                </div>
                            </div>
                            <div class="m-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="m-3">
                                <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-grid gap-2 mx-3 mb-4">
                                <button class="btn btn-outline-dark" type="submit">Ingresar</button>
                                <button class="btn btn-outline-danger" href="{{ route('password.request') }}"
                                    type="button">Olvidé mi contraseña</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
