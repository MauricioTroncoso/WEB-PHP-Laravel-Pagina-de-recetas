<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <title>Menu</title>
  </head>
  <body>
    <!--Barra de navegacion -->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="/inicio">
    <img src="{{asset('img/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Inicio
        </a>
        <a class="navbar-brand" href="/recetario">
              Recetario
        </a>
        @if(auth()->check())
        <a class="navbar-brand" href="/recetas">
            
              Crud Recetas
        </a>
        <a class="navbar-brand" href="/Pasos">
          Pasos
        </a>
        <a class="navbar-brand" href="/Ingredientes">
          Ingredientes
        </a>
        @endif



      @if(auth()->check())
      <form action="/logout" style="display:inline" method="post"> 
        @csrf
          <a href="#" onclick="this.closest('form').submit()">Logout</a>
        </form>
      @else
        <form action="/log" style="display:inline" method="get"> 
        @csrf
        <a href="#" onclick="this.closest('form').submit()">Login</a>
        </form> 
      @endif
    </div>
    </nav>

    <!--Mostrar mensaje al usuario -->
       @if(Session::has('mensaje'))
       <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Atento!</strong> {{Session::get('mensaje')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        @endif


    <!--DIV de contenido de las vistas-->
    <div class='container'>
        @yield('contenido')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/style.js"></script>
  </body>
</html>