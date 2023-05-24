<?php
/** @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */


// $categorySelected = ($product != null) ? $product->category->name : (old("category_id") == $category->id);
// var_dump(old('category_id'));

?>

<div>   
    <div class="mb-3">
        <label for="name" class="form-label">Nombre del producto</label>
        <input 
            type="text" 
            class="form-contro" 
            id="name" 
            name="name" 
            @error('name') aria-describedBy="error-name" @enderror 
            value="{{ old('name', $product->name) }}"/>
        
        @error('name')
        <div class="text-danger" id="error-release_date">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input 
            type="text" 
            class="form-contro" 
            id="price" 
            name="price" 
            @error('price') aria-describedBy="error-price" @enderror /
            value="{{ old('price', $product->price) }}" >
        @error('price')
        <div class="text-danger"  id="error-price">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoría</label>

            <select
                name="category_id"
                id="category_id"
                class="form-control"
                @error('category_id') aria-describedby="error-category_id" @enderror
            >
                <option value=""></option>
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"    
                        @selected(old('category_id', $product->category_id) == $category->id)
                    >{{ ucfirst($category->name) }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger" id="error-category_id">{{ $message }}</div>
            @enderror
            
    </div>
    <div class="mb-3">
        <label for="product_description" class="form-label">Descripcion del producto</label>
        <input 
            type="textarea" 
            class="form-contro" 
            id="product_description"
            name="product_description" 
            @error('product_description') aria-describedBy="error-product_description" @enderror
            value="{{ old('product_description', $product->product_description) }}"/>
        @error('product_description')
        <div class="text-danger"  id="error-product_description">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
            <p>Imagen actual</p>
            @if($product->image !== null && Storage::has('imgs/' . $product->image))
                <img class="mw-100" src="{{ Storage::url('imgs/' . $product->image) }}" alt="{{ $product->image_description }}">
            @else
            <img src="{{ asset('storage/imgs/error.jpg') }}" alt="taza con una carita triste"/>
            @endif
        </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input 
            type="file" 
            class="form-contro" 
            id="image"
            name="image" 
            value="{{ old('image', $product->image) }}"
            />
    </div>
    <div class="mb-3">
        <label for="image_description" class="form-label">Descripción de la imagen</label>
        <input 
            type="text" 
            class="form-contro" 
            id="image_description"
            name="image_description"
            value="{{ old('image_description', $product->image_description) }}"/>
    </div>
    <button type="submit" class="btn btn-prymary">{{ $action }}</button>
</div>