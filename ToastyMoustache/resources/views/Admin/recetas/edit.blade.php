@extends('Admin/layouts.layoutBase')

@section('contenido')

<form action="{{ url('../recetas/'.$recetas->id) }}" method='post'>
    @csrf
    {{method_field('PATCH')}}
    @include('Admin/recetas.form')
</form>
@endsection
