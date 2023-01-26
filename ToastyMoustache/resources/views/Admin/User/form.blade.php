<div class="mb-3">
    <label for="nombreUsuario" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" id="id-nombre_usuario" value="{{isset($Usuario->name)?$Usuario->name:''}}" name="name" required>
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" class="form-control" id="id-correo" value="{{isset($User->email)?$User->email:''}}" name="email" placeholder="email@algo.cl" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="id-password" value="{{isset($User->password)?$User->password:''}}" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
