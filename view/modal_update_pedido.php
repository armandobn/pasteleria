<!-- Modal -->
<div class="modal fade" id="modal_update_pedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

        <form id="formulario_update_pedido">

          <div class="form-group">
            <input type="text" class="form-control" id="update_id" name="update_id" hidden="true">
          </div>
          <div class="form-group">
            <label for="update_pastel">Nombre del Pastel</label>
            <input type="text" class="form-control" id="update_pastel" name="update_pastel">

          </div>
          <div class="form-group">
            <label for="update_kilos">Kilos</label>
            <input type="text" class="form-control" id="update_kilos" name="update_kilos">
          </div>
          <div class="form-group">
            <label for="update_fecha_pedido">Fecha Entrega</label>
            <input type="text" class="form-control" id="update_fecha_pedido" name="update_fecha_pedido" readonly>
          </div>  
          <div class="form-group">
            <label for="update_fecha_entrega">Fecha Entrega</label>
            <input type="text" class="form-control" id="update_fecha_entrega" name="update_fecha_entrega">
          </div>

        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- se copio el atributo de data-dismiss para que la ventana se cierre sola al dispararse el sawl -->
        <button type="button" class="btn btn-warning" id="" data-dismiss="modal"
        onclick="actualiza_pedidos()">Actualizar</button>

    
      </div>
    </div>
  </div>
</div>