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
        <input 
            type="text" 
            class="form-contro" 
            id="category"
            name="category" 
            value="{{ old('category', $product->category) }}"/>
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
                <p>Acá iría una imagen diciendo que no hay imagen.</p>
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