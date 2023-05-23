<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */

?>
@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
    <h1>Form</h1>
    <form action="{{ route('processCreateProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-product-form action="Crear"/>
    </form>
@endsection