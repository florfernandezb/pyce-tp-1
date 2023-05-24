<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection $categories */    

?>
@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
    <h2>Form</h2>
    <form action="{{ route('processCreateProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <x-product-form action="Crear" :categories="$categories"/>
    </form>
@endsection