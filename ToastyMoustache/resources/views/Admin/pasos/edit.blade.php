@extends('Admin/layouts.layoutBase')

@section('contenido')

<form action="{{ url('../Pasos/'.$pasos->id) }}" method='post'>
    @csrf
    {{method_field('PATCH')}}
    @include('Admin/pasos.form')
</form>
@endsection