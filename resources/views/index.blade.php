@extends('layout.app')
@extends('layout.navbar')
@section('content')
    <section style="margin-top: 40px;">
        <div class="container">
            <div class="row" id="contenedor-productos">
                @foreach ($products as $product)
                    <div class="col-sm-3 m-3 border border-secondary cursor-pointer">
                        <div class="img">
                            <img src="{{ $product['product']->imagen->get_image }}"
                                class="rounded mx-auto d-block img-fluid" style="width:70%">
                        </div>
                        <div class="d-inline-block">
                            <p class="clasificacion">
                                <input type="radio" name="estrellas{{ $product['product']->id }}"
                                    {{ $product['avg'] == 5 ? 'checked' : '' }} value="5">
                                <label>★</label>
                                <input type="radio" name="estrellas{{ $product['product']->id }}"
                                    {{ $product['avg'] == 4 ? 'checked' : '' }} value="4">
                                <label>★</label>
                                <input type="radio" name="estrellas{{ $product['product']->id }}"
                                    {{ $product['avg'] == 3 ? 'checked' : '' }} value="3">
                                <label>★</label>
                                <input type="radio" name="estrellas{{ $product['product']->id }}"
                                    {{ $product['avg'] == 2 ? 'checked' : '' }} value="2">
                                <label>★</label>
                                <input type="radio" name="estrellas{{ $product['product']->id }}"
                                    {{ $product['avg'] == 1 ? 'checked' : '' }} value="1">
                                <label>★</label>
                            </p>
                        </div>
                        <h3 class="m-1">{{ number_format($product['product']->price) }} COP</h3>
                        <p class="m-1">{{ $product['product']->product_name }}</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button"
                                onclick="window.location = '{{ route('viewProduct', ['id' => $product['product']->id]) }}'"
                                class="btn btn-outline-dark m-3 bu">Comprar
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
