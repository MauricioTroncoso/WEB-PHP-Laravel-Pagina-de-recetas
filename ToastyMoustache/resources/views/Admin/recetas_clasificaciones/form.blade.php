<div class="mb-3" style="display: none">
    <label for="nombreReceta" class="form-label">Id Receta</label>
    <input type="text" class="form-control" id="id-nombre_receta" value="{{$recetas->id}}" name="id_receta">
  </div>
  <div class="mb-3">
    <label for="nombreReceta" class="form-label">Nombre Receta</label>
    <input type="text" class="form-control" id="id-nombre_receta" value="{{$recetas->nombre_receta}}" readonly>
  </div>
  <select class="form-select" size="3" aria-label="size 3 select example" id="clasificacion" name="id_clasificacion">
  @foreach($clasificaciones as $clasificacion)
  <option value="{{$clasificacion->id}}" name="id_clasificacion">{{$clasificacion->nombre_clasificacion}}</option>
  @endforeach
</select>
  <button type="submit" class="btn btn-primary">Guardar</button>
