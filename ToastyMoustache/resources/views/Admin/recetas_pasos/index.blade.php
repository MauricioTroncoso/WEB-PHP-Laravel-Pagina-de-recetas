@extends('Admin/layouts.layoutBase')

@section('contenido')
<h1>Sistema de union de recetas y pasos</h1>
<!--Barra de busqueda-->
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Buscar Receta" aria-label="Search" name="buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>

<form action="{{url('../RecetasPasos/create')}}">
    <button type="submit" class="btn btn-success">Vincular recetas y pasos</button>
</form>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Nombre Receta</th>
        <th>Nombre Paso</th>
        <th>Descripcion paso</th>
        <th>enlace</th>
    </tr>
</thead>
<tbody>
    @foreach ($recetas_pasos as $receta_paso)
    <tr>
        <td>{{$receta_paso->nombre_receta}}</td>
        <td>{{$receta_paso->nombre_paso}}</td>
        <td>{{$receta_paso->descripcion_paso}}</td>
        <td>{{$receta_paso->enlace}}</td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection