@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../RecetasClasificaciones') }}" method='post'>
    @csrf
    
@include('Admin/recetas_clasificaciones.form')
@endsection

