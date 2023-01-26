@extends('Admin/layouts.layoutBase')

@section('contenido')

<form action="{{ url('../User/'.$User->id) }}" method='post'>
    @csrf
    {{method_field('PATCH')}}
    @include('Admin/User.form')
</form>
@endsection
