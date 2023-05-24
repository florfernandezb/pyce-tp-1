<?php
/** @var \App\Models\Product[]|\Illuminate\Database\Eloquent\Collection $products */    
?>
@extends('layouts.main')
@section('title', 'Productos')
@section('main')
    <h2>PRODUCTS LIST</h2>

    @auth
    <div class="mb-3">
        <a href="{{ route('newProductForm') }}">Crear producto</a>
    </div>
    @endauth

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product):
                <tr>
                    <td> {{ $product->name }} </td> 
                    <td> ${{ $product->price }} </td> 
                    <td> {{ ucfirst($product->category->name) }} </td> 
                    <td> {{ $product->product_description }} </td> 

                    
                    <td>
                        <a href="{{ route('product' , ['id' => $product->id]) }}" class="see-product"><i class="bi bi-eye-fill"></i></a>
                        @auth
                            <a href="{{ route('updateProductForm' , ['id' => $product->id]) }}" class="edit" data-toggle="modal"><i class="bi bi-pen-fill biIcons"></i></a>
							<a href="{{ route('confirmDelete' , ['id' => $product->id]) }}" class="delete" data-toggle="modal"><i class="bi bi-trash-fill" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection