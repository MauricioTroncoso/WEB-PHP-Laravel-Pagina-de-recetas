@extends('Admin/layouts.layoutBase')

@section('contenido')
<h1>Inventario de Ingredientes</h1>
<!--Barra de busqueda-->
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Buscar Ingrediente" aria-label="Search" name="buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
</form>

<!--Formulario de creado-->
<form action="{{url('../Ingredientes/create')}}">
<button type="submit" class="btn btn-success">Agregar un ingrediente</button>
</form>

<!--Tabla de informacion-->
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Ingrediente</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($ingredientes as $ingrediente)
    <tr>
        <td>{{$ingrediente->nombre_ingrediente}}</td>
        <td> 
            <!--Formulario de edicion-->
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{url('../Ingredientes/'.$ingrediente->id.'/edit')}}">
            @csrf
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        
        <!--Formulario de borrado-->
        <form action="{{url('../Ingredientes/'.$ingrediente->id)}}" method="post">
             @csrf {{method_field('DELETE')}}<button type="submit" onclick="return confirm('¿Seguro quieres eliminar el registro {{$ingrediente->nombre_ingrediente}}?')" class="btn btn-danger">Borrar</button></form>
             </div>
            </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection