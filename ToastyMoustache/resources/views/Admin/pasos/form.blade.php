<div class="mb-3">
    <label for="nombrePaso" class="form-label">Nombre Paso</label>
    <input type="text" class="form-control" id="id-nombre_paso" value="{{isset($pasos->nombre_paso)?$pasos->nombre_paso:''}}" name="nombre_paso" require placeholder="Paso 1- nombre receta">
  </div>
  <div class="mb-3">
    <label for="descripcionPaso" class="form-label">Descripcion del paso</label>
    <input type="text" class="form-control" id="id-descripcionPaso" value="{{isset($pasos->descripcion_paso)?$pasos->descripcion_paso:''}}" name="descripcion_paso" placeholder="Descripcion detallada de cada paso a seguir, no se aceptan numeros" onkeydown="return /[a-z-ñ, ]/i.test(event.key)">
  </div>
  <div class="mb-3">
    <label for="enlace" class="form-label">Enlace de Gif o Img</label>
    <input type="text" class="form-control" id="id-enlace" value="{{isset($pasos->enlace)?$pasos->enlace:''}}" name="enlace" placeholder="Enlace a la Img o Gif" require>
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>