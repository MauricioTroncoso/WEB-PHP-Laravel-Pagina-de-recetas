@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../Ingredientes') }}" method='post'>
    @csrf
    
@include('Admin/ingredientes.form')
@endsection
