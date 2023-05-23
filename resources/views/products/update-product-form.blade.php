<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
<div>
    <h1>Form</h1>
    <form action="{{ route('processUpdate', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-product-form :product="$product" action="Guardar"/>
    </form>
</div>
@endsection