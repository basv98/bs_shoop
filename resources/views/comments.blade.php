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
        <form action="{{ route('comment') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="col-md-12 mb-5">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="comment"
                        id="comment"></textarea>
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