<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Product $product */
?>
<section>
    <div class="d-flex flex-row-reverse">
        <div class="col-9 mb-3  ">
            <h1 class="mb-3 ">{{ $product->name }}</h1>
            <dl>
                <dt>Precio</dt>
                <dd>{{ $product->price }}</dd>
                <dt>Descripción</dt>
                <dd>{{ $product->product_description }}</dd>
            </dl>
        </div>
        <div class="col-3">
            @if($product->image != null && Storage::has('imgs/' . $product->image))
            <img class="mw-100" src="{{ Storage::url('imgs/' . $product->image) }}" alt="{{ $product->imageDescription }}" >
            @else
                <p>Acá iría una imagen diciendo que no hay imagen.</p>
            @endif
        </div>
    </div>
</section>  