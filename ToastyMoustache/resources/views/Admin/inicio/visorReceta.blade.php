@extends('Admin/layouts.layoutBase')
@section('contenido')
<div class="text-center">
@foreach($recetas as $receta)
<h1>{{$receta->nombre_receta}}</h1>
@endforeach
</div>

<h2>Ingredientes~</h2>
<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Ingrediente</th>
        <th>Cantidad</th>
        <th>Medicion</th>
    </tr>
</thead>
<tbody>
    @foreach ($ICM as $icm)
    <tr>
        <td>{{$icm->nombre_ingrediente}}</td>
        <td>{{$icm->cantidad}}</td>
        <td>{{$icm->nombre_medicion}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<div class="text-center">
<p class="fs-2">Paso a paso~</p>
</div>

@foreach($pasos as $paso)
<div class="card border-dark mb-3">
<div class="card text-center">
  <div class="card-header">
  {{$paso->nombre_paso}}
  </div>
  
  <div class="card-body text-white bg-danger mb-3">
    <h5 class="card-title">{{$paso->descripcion_paso}}</h5>
    <img src="{{$paso->enlace}}">
  </div>
  </div>
 
</div>
<br>
@endforeach

<!--Enlace al video-->
<div class="text-center">
  <h2><p style= "font-family: cursive;">Video paso a paso ~</p></h2>
<iframe width="560" height="315" src="{{$receta->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<!--
<div class="text-center shadow">
<a title="logo" href="{{$receta->video}}" class=”brighten”><h2><img src="../img/logo.png" width="100" height="60" alt="logo" class=”brighten”></h2></a>
</div>
-->
<footer>
<div class="card text-center ">
  <div class="card-header">
    Encuentranos en Google Play Store
  </div>
  <div class="card-body ">
  <a title="android" href="https://youtu.be/mow6oFj4MPs"><img src="../img/google.png" width="100" height="40" alt="android"></a>
    <a href="#" class="btn btn-primary">Volver a arriba</a>
  </div>
</div>
@endsection