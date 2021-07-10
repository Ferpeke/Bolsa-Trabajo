<!-- Modal Categoria-->
<div class="modal fade" id="modalActializarTrabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarTrabajo">
        <label for="nombreTrabajo">Nombre del Trabajo:</label>
          <input type="text" id="nombreTrabajo" name="nombreTrabajo" class="form-control" placeholder="Escriba el nombre del trabajo">

          <div class="mt-2">
            <label for="salario">Salario:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="number" class="form-control" name="salario" id="salario" min="141" placeholder="El salario minimo es de 141.7 por día">
              <div class="input-group-append">
                <span class="input-group-text">pesos al mes</span>
              </div>
            </div>
          </div>

          <div>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" id="direccion" name="direccion" class="form-control" placeholder="Escribe la direccion completa">
          </div>
          <div class="mt-2">
            <label for="horario">Horario:</label>
            <div class="input-group mb-3">
              <select class="custom-select" id="horario">
                <option selected>Selecciona el tipo de Horario</option>
                <option value="Tiempo Completo">Tiempo completo</option>
                <option value="Medio Tiempo">Medio Tiempo</option>
                <option value="Indeterminado">Indeterminado</option>
              </select>
            </div>
          </div>
          
          <div class="mt-2">
            <label for="nombreCategoria">Categoria del Trabajo:</label>
            <div class="input-group mb-3">
              <select class="custom-select" id="nombreCategoria">
                <option selected>Selecciona la categoria</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="mt-2">
            <label for="requisitos_trabajo">Requisistos del trabajo:</label>
            <textarea name="requisitos_trabajo" id="requisitos_trabajo" cols="15" rows="5" class="form-control"></textarea>
          </div>
          <div class="mt-2">
            <label for="tiempo_contrato">Tiempo de contratación:</label>
            <select class="custom-select" id="inputGroupSelect01">
                <option selected>Selecciona </option>
                <option value="Temporal">Temporal</option>
                <option value="Definitivo">Definitivo</option>
              </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="btnActualizarTrabajo">Actualizar</button>
      </div>
    </div>
  </div>
</div>