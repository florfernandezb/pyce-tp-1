@extends('layouts.main')

@section('title', ('Pàgina no encontrada'))
@section('main')
    <h1 class="mb-3">Lo sentimos, ese producto no existe</h1>
    <p>Pruebe con <a href={{ url('products') }}>algun otro</a></p> 
@endsection
