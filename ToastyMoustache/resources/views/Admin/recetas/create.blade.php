@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../recetas') }}" method='post'>
    @csrf
    
@include('Admin/recetas.form')
@endsection

