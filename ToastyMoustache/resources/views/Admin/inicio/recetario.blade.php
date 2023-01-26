@extends('Admin/layouts.layoutBase')
@section('contenido')
<h1>Recetario</h1>
<!--Barra de busqueda-->
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Buscar Receta" aria-label="Search" name="buscar">
    <div align="right">
 
<select class="select-css" aria-label="Default select example" name="select" >
<option value="">Tipos de recetas</option>
@foreach ($s as $s)
<option value="{{$s->id}}">{{$s->nombre_clasificacion}}</option>
@endforeach
</select>

</div>
    <button class="btn btn-outline-success" type="submit" >Buscar</button>
</form>
<br>

<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($recetas as $receta)
<div class="card" style="width: 12rem;">
  <img src="{{$receta->img}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$receta->nombre_receta}}</h5>
    <p class="card-text">{{$receta->descripcion}}</p>
    <a href="/Visor/{{$receta->id}}" class="btn btn-succes">Ver receta</a>
  </div>
</div>
@endforeach
</div>


<!--
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Receta</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($recetas as $receta)
    <tr>
        <td>{{$receta->nombre_receta}}</td>
        <td> 
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{url('../Visor/'.$receta->id)}}" method="get">
             @csrf <button type="submit" class="btn btn-success">Ver</button>
             </div>
            </td>
            </form>
            </div>
            </td>
    </tr>
    @endforeach
-->
</tbody>
</table>
@endsection