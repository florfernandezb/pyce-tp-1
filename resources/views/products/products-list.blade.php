<?php
/** @var \App\Models\Product[]|\Illuminate\Database\Eloquent\Collection $products */    
?>
@extends('layouts.main')
@section('title', 'Productos')
@section('main')
    <h1>PRODUCTS LIST</H1>

    <div class="mb-3">
        <a href="{{ route('newProductForm') }}">Crear producto</a>
    </div>

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
                    <td> {{ $product->price }} </td> 
                    <td> {{ $product->category }} </td> 
                    <td> {{ $product->product_description }} </td> 
                    <td><a href="{{ route('product' , ['id' => $product->id]) }}" class="btn btn-primary">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection