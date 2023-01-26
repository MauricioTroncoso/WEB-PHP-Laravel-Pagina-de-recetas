@extends('Admin/layouts.layoutBase')

@section('contenido')
<form action="{{ url('../User/store') }}" method='post'>
    @csrf
    
@include('Admin/User.form')
@endsection

