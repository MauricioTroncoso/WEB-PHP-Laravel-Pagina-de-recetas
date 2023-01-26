@extends('Admin/layouts.layoutBase')

@section('contenido')
<h1>Visor y Creador de Recetas</h1>
<form action="{{url('recetas/create')}}">
<button type="submit" class="btn btn-success">Crear Receta</button>
</form>

<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Nombre Receta</th>
        <th>Tipo Receta</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($recetas as $receta)
    <tr>
        <td>{{$receta->nombre_receta}}</td>
        <td>{{$receta->tipo_receta}}</td>
        <td> 
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="{{url('../recetas/'.$receta->id.'/edit')}}">
            @csrf
            <button type="submit" class="btn btn-primary">Editar</button>
        </form><form action="{{url('../recetas/'.$receta->id)}}" method="post">
             @csrf {{method_field('DELETE')}}<button type="submit" onclick="return confirm('¿Seguro quieres eliminar el registro?')" class="btn btn-danger">Borrar</button></form>
             </div>
            </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection