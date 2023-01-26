<div class="mb-3" style="display: none">
    <label for="nombreReceta" class="form-label">Id Receta</label>
    <input type="text" class="form-control" id="id-nombre_receta" value="{{$recetas->id}}" name="id_receta">
  </div>
  <div class="mb-3">
    <label for="nombreReceta" class="form-label">Nombre Receta</label>
    <input type="text" class="form-control" id="id-nombre_receta" value="{{$recetas->nombre_receta}}" readonly>
  </div>
  <select class="form-select" size="3" aria-label="size 3 select example" id="ingrediente" name="id_ingrediente">
  @foreach($ingredientes as $ingrediente)
  <option value="{{$ingrediente->id}}" name="id_ingrediente">{{$ingrediente->nombre_ingrediente}}</option>
  @endforeach
  </select>
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad de ingrediente</label>
    <input type="text" class="form-control" id="id-cantidad" name="cantidad" require placeholder="100,200,300,etc">
  </div>
  <select class="form-select" size="3" aria-label="size 3 select example" id="medicion" name="id_medicion">
  @foreach($mediciones as $medicion)
  <option value="{{$medicion->id}}" name="id_medicion">{{$medicion->nombre_medicion}}</option>
  @endforeach
  </select>
  <button type="submit" class="btn btn-primary">Guardar</button>
