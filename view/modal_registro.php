<!-- Modal -->
<div class="modal fade" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header   bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">

        <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
        <form id="formulario_registro">
          <div class="form-group">
            <label for="regis_usuario">Ingresa Usuario</label>
            <input type="text" class="form-control" id="regis_usuario" name="regis_usuario">

          </div>
          <div class="form-group">
            <label for="regis_password">Ingresa Contraseña</label>
            <input type="password" class="form-control" id="regis_password" name="regis_password">
          </div>
          <div class="form-group">
            <label for="rep_password">Repite tu Contraseña</label>
            <input type="password" class="form-control" id="rep_password" name="rep_password">
          </div>

        </form>
       

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_crear_estudiante"
          onclick="registro()">Registrarse</button>
      </div>
    </div>
  </div>
</div>