<!-- Modal Categoria -->
<div class="modal fade" id="modalAgregarTrabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar un Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarTrabajo">
          <label for="nombre_Trabajo">Nombre del Trabajo:</label>
          <input type="text" id="nombre_Trabajo" name="nombre_Trabajo" class="form-control" placeholder="Escriba el nombre del trabajo">

          <div class="mt-2">
            <label for="salario_trabajo">Salario:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="number" class="form-control" name="salario_trabajo" id="salario_trabajo" min="141" placeholder="El salario minimo es de 141.7 por día">
              <div class="input-group-append">
                <span class="input-group-text">pesos al mes</span>
              </div>
            </div>
          </div>

          <div>
            <label for="municipio_alcaldia">Municipio o Alcaldia:</label>
            <input type="text" id="municipio_alcaldia" name="municipio_alcaldia" class="form-control" placeholder="Ingrese el municipio o alcaldía">
          </div>
          <div>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" id="direccion" name="direccion" class="form-control" placeholder="Escribe la direccion completa">
          </div>
          <div class="mt-2">
            <label for="horario_trabajo">Horario:</label>
            <div class="input-group mb-5">
              <input type="time" class="form-control" id="horario_entrada" name="horario_entrada">
              <div class="input-group-append">
                <span class="input-group-text">a</span>
              </div>
              <input type="time" class="form-control" id="horario_salida" name="horario_salida">
            </div>
          </div>
          <label for="dias_trabajo">Ingresa los dias de la semana a trabajar:</label>
          <input type="text" class="form-control" id="dias_trabajo" name="dias_trabajo" placeholder="Ej. Lunes, Martes, Miercoles...etc,">
          <div class="mt-2">
            <label for="nombre_Categoria">Categoria del Trabajo:</label>
            <div class="input-group mb-3">
              <select class="custom-select" id="nombre_Categoria">
                <option value="0">Selecciona la categoria</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="mt-2">
            <label for="requisitos">Requisistos del trabajo:</label>
            <textarea name="requisitos" id="requisitos" cols="15" rows="5" class="form-control"></textarea>
          </div>
          <div class="mt-2">
            <label for="tiempo_contrato">Tiempo de contratación:</label>
            <select class="custom-select" id="tiempo_contrato">
              <option value="0">Selecciona </option>
              <option value="Temporal">Temporal</option>
              <option value="Definitivo">Definitivo</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="btn_publicar_trabajo">Publicar Trabajo </button>
      </div>
    </div>
  </div>
</div>
<script src="<?= SERVIDOR ?>manager/reclutador/modales/agregarTrabajo.js"></script>