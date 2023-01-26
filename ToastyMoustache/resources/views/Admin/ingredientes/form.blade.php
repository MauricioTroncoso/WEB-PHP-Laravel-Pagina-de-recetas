<div class="mb-3">
    <label for="nombreingrediente" class="form-label">Nombre Ingrediente</label>
    <input type="text" class="form-control" id="id-nombre_ingrediente" value="{{isset($ingredientes->nombre_ingrediente)?$ingredientes->nombre_ingrediente:''}}" name="nombre_ingrediente"  placeholder="Este campo solo acepta letras" onkeydown="return /[a-z-ñ, ]/i.test(event.key)">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
