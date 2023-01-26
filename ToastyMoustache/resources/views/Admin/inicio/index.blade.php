@extends('Admin/layouts.layoutBase')
@section('contenido')
<!-- Carrusel-->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" ;>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/lasagna.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div style="color:#e0f7fa;">
        <h5>Comidas</h5>
        <p class="fst-italic">Evita morir de hambre aprendiendo a cocinar</p>
        </div>
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/postres.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div style="color:#424242;">
        <h5>Postres</h5>
        <p class="fst-italic">Endulza tu amargada existencia con postres</p>
        </div>
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- FIN Carrusel-->
<br>
<br>


<!-- Sobre Nosotros-->
<div class="text-center animado" >
<p class="fst-italic fs-1">Sobre Nosotros</p>
</div>
<div class="card mb-3 text-center card border-dark mb-3 animado" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/menu.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Menu a prueba de bobos</h5>
        <p class="card-text">Toasty Moustache fue creado de tal forma que fuera facil de usar, atractivo y util para aquellas personas que no 
          saben cocinar y para pasar un ramo.
        </p>
        <p class="card-text"><small class="text-muted">oh si</small></p>
      </div>
    </div>
  </div>
</div>

<!-- FIN sobre nosotros-->

<!-- Recetas-->
<div class="text-center animado" animado>
<p class="fst-italic fs-1">Algunas de nuestras recetas</p>
<p class="card-text animado"><small class="text-muted">Solo hay una</small></p>
</div>

<div class="card text-center border-dark mb-3 animado" style="width: 18rem;">
  <img src="..\img\Recetas\Carlota de Limon\carlota.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Carlota de Limon</h5>
    <p class="card-text fst-italic">Tarta de origen frances realizada con base de galletas</p>
    <a href="/recetario" class="btn btn-primary">Ver nuestras recetas</a>
  </div>
</div>



<footer>
<div class="card text-center ">
  <div class="card-header">
    Encuentranos en Google Play Store
  </div>
  <div class="card-body ">
  <a title="android" href="https://youtu.be/mow6oFj4MPs"><img src="img/google.png" width="100" height="40" alt="android"></a>
    <a href="#" class="btn btn-primary">Volver a arriba</a>
  </div>
</div>

</footer>
<!-- FIN Recetas-->
@endsection