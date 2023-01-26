@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../RecetasPasos') }}" method='post'>
    @csrf
    
@include('Admin/recetas_pasos.form')
@endsection

