@extends('Admin/layouts.layoutBase')

@section('contenido')
<h1>Visor y Creador de pasos para recetas</h1>

<!--Barra de busqueda-->
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Buscar Paso" aria-label="Search" name="buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>
<!--Formulario de creado-->
<form action="{{url('../Pasos/create')}}">
<button type="submit" class="btn btn-success">Crear Paso</button>
</form>

<!--Tabla de informacion-->
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Nombre Paso</th>
        <th>Descripcion del paso</th>
        <th>Gif o Img</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
        @foreach($pasos as $paso)
    <tr>
        <td>{{$paso->nombre_paso}}</td>
        <td>{{$paso->descripcion_paso}}</td>
        <td>{{$paso->enlace}}</td>
        <td> 
            <!--Formulario de edicion-->
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{url('../Pasos/'.$paso->id.'/edit')}}">
            @csrf
            <button type="submit" class="btn btn-primary">Editar</button>
         </form>
         
        <!--Formulario de borrado-->
         <form action="{{url('../Pasos/'.$paso->id)}}" method="post">
             @csrf {{method_field('DELETE')}}<button type="submit" onclick="return confirm('¿Seguro quieres eliminar el registro {{$paso->nombre_paso}}?')" class="btn btn-danger">Borrar</button></form>
             </div>
            </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection