@extends('layout.app')
@extends('layout.navbar')
@section('content')
<section style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-3  m-auto border border-secondary cursor-pointer">
                <div class="img">
                    <img src="{{asset($product->imagenes[0]->url)}}" class="rounded mx-auto d-block" style="width:100%">
                </div>
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
                <h3 class="m-1">{{number_format($product->price)}} COP</h3>
                <p class="m-1">{{$product->product_name}}</p>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" onclick="window.location = '{{ route('viewProduct', ['id' => $product->id]) }}'"
                        class="btn btn-outline-dark m-3 bu">Comprar</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection