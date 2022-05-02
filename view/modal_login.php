<!-- Modal -->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">

        <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
        <form id="formulario_login">
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
        </form>
        <div class="text-center">
        <button type="button" class="badge badge-light"  data-toggle="modal" 
          data-dismiss="modal" data-target="#modal_registro">Registrarse</button>
          
        </div> 

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <span type="button" class="btn btn-primary" id="btn_crear_estudiante" onclick="login()">Ingresar</span>
      </div>
    </div>
  </div>
</div>