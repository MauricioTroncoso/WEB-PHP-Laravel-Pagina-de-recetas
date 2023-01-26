@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../Pasos') }}" method='post'>
    @csrf
    
@include('Admin/pasos.form')
@endsection
