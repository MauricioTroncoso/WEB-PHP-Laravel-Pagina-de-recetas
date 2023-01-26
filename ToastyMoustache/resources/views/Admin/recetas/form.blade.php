<div class="mb-3">
    <label for="nombreReceta" class="form-label">Nombre Receta</label>
    <input type="text" class="form-control"  value="{{isset($recetas->nombre_receta)?$recetas->nombre_receta:''}}" name="nombre_receta" placeholder="Solo se aceptan letras" onkeydown="return /[a-z-ñ, ]/i.test(event.key)">
  </div>
  <div class="mb-3">
    <label for="descripcionreceta" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="id-descripcionreceta" value="{{isset($recetas->descripcion)?$recetas->descripcion:''}}" name="descripcion" placeholder="Solo se aceptan letras" onkeydown="return /[a-z-ñ, ]/i.test(event.key)">
  </div><div class="mb-3">
    <label for="imgreceta" class="form-label">Enlace img</label>
    <input type="text" class="form-control" id="id-imgreceta" value="{{isset($recetas->img)?$recetas->img:''}}" name="img" placeholder="Enlace de tu img" require>
  </div>
  <div class="mb-3">
    <label for="videoreceta" class="form-label">Video</label>
    <input type="text" class="form-control" id="id-videoreceta" value="{{isset($recetas->video)?$recetas->video:''}}" name="video" placeholder="tu video" require>
  </div>
  <div class="mb-3">
  <select class="form-select" size="3" aria-label="size 3 select example" id="disponible" name="disponible">
    @foreach($seleccion as $select)
    <option value="{{$select->nombre_seleccion}}" name="disponible">{{$select->nombre_seleccion}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary" >Guardar</button>
