
<?php
/** @var \App\Models\Product $product */
?>
@extends('layouts.main')
@section('title', 'Detalle de ' . $product->name)

@section('main')
    <x-product-data :product="$product"/>
@endsection