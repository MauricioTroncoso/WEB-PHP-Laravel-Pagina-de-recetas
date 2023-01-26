@extends('Admin/layouts.layoutBase')

@section('contenido')
<h1>Visor y Creador de Recetas</h1>
<!--Barra de busqueda-->
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Buscar Receta" aria-label="Search" name="buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>

<form action="{{url('../recetas/create')}}">
    <button type="submit" class="btn btn-success">Crear Receta</button>
</form>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Receta</th>
        <th>Acciones</th>
        <th>Editar | Borrar</th>
    </tr>
</thead>
<tbody>
    @foreach ($recetas as $receta)
    <tr>
        <td>{{$receta->nombre_receta}}</td>
        <td> 
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{url('../RecetasPasos/create/'.$receta->id)}}" method="post">
             @csrf <button type="submit" class="btn btn-success">Vincular Pasos</button>
            </form>
            <form action="{{url('../RecetasClasificaciones/create/'.$receta->id)}}" method="post">
             @csrf <button type="submit" class="btn btn-info">Dar Clasificacion</button>
            </form>
            <form action="{{url('../RecetasIngredientesCantidades/create/'.$receta->id)}}" method="post">
             @csrf <button type="submit" class="btn btn-secondary">Agregar Ingrediente</button>
            </form>
             </div>
            </td>
            <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{url('../recetas/'.$receta->id.'/edit')}}">
            @csrf
            <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            <form action="{{url('../recetas/'.$receta->id)}}" method="post">
             @csrf {{method_field('DELETE')}}<button type="submit" onclick="return confirm('¿Seguro quieres eliminar el registro {{$receta->nombre_receta}}?')" class="btn btn-danger">Borrar</button>
            </form>
            </div>
            </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection