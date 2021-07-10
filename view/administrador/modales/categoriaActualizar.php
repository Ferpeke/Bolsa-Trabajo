
<!-- Modal Categoria-->
<div class="modal fade" id="modalActializarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar una Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarCategoria">
        <label for="nombreCategoria">Nombre de la Categoria:</label>
            <input type="text" id="nombreCategoria" name="nombreCategoria" class="form-control">

            <label for="descripcion">Descripcion de la Categoria</label>
            <textarea name="descripcion" id="descripcion" cols="15" rows="5" class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="btnActualizarCategoria">Actualizar</button>
      </div>
    </div>
  </div>
</div>