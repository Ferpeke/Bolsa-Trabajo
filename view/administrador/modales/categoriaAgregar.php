
<!-- Modal Categoria-->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar una Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarCategoria">
            <label for="nombreCategoria">Nombre de la Categoria:</label>
            <input type="text" id="nombre_Categoria" name="nombreCategoria" class="form-control">

            <label for="descripcionCategoria">Descripcion de la Categoria</label>
            <textarea name="descripcion" id="descripcion_Categoria" cols="15" rows="5" class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-danger" data-dismiss="modal">Cerrar</span>
        <span class="btn btn-success" id="btn_GuardarCategoria">Guardar Categoria</span>
      </div>
    </div>
  </div>
</div>
<script src="<?=SERVIDOR?>manager/administrador/modales/categoriaAgregar.js"></script>