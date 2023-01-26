@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../RecetasIngredientesCantidades') }}" method='post'>
    @csrf
    
@include('Admin/recetas_ingredientes_cantidades.form')
@endsection

