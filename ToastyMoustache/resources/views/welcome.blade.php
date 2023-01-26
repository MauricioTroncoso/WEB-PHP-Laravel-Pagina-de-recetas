@extends('Admin/layouts.layoutBase')
@section('contenido')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>Login</title>
  </head>
  <body >
        <!-- Login-->
  <div class="card" style="max-width: 15.5rem; max-height: 27.5rem; width: auto; margin: auto auto;">
    <div class="card text-center bg-info mb-3"  >
      <img src="img/logo.png" width="50" height="140" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">Login</h5>
        <form form action="{{ url('login') }}" method='post'>
        @csrf
      
    <div class="mb-3">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="idUsuario" name="name">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
     <input type="password" class="form-control" id="idContraseña" name="password">
    </div>
  </div>  
  <button type="submit" class="btn btn-success">Login</button>
</form>
<form action="{{ url('User/create') }}" method="post">
    @csrf
<button type="submit" class="btn btn-primary">Crear Usuario</button> </form>
    </div>
  </div>
</div>
  





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
@endsection