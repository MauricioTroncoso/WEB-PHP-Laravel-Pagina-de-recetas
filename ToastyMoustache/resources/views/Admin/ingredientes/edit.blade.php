@extends('Admin/layouts.layoutBase')

@section('contenido')

<form action="{{ url('../Ingredientes/'.$ingredientes->id) }}" method='post'>
    @csrf
    {{method_field('PATCH')}}
    @include('Admin/ingredientes.form')
</form>
@endsection
