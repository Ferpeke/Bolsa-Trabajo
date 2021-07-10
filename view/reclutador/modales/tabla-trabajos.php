<div class="table table-responsive">
  <table class="table table-hover" id="tablaTrabajosaDataTable">
    <thead>
      <tr style="text-align: center;">
        <th scope="col">Nombre del Trabajo</td>
        <th scope="col">Descripción</td>
        <th scope="col">Fecha de Publicación</td>
        <th scope="col">Categoria</td>
        <th scope="col">Editar</td>
        <th scope="col">Eliminar</td>
      </tr>
    </thead>
    <tbody>
      <tr style="text-align: center;">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActializarTrabajo">
            <span class="fas fa-edit"></span>
          </span>
        </td>
        <td>
          <span class="btn btn-danger btn-sm">
            <span class="fas fa-trash"></span>
          </span>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<?php
require_once 'actualizarTrabajo.php';
?>
<script>
  $(document).ready(function() {
    var table = $('#tablaTrabajosaDataTable').DataTable({
      aoColumnDefs: [{
          "aTargets": [0],
          "bSortable": true
        },
        {
          "aTargets": [2],
          "asSorting": ["asc"],
          "bSortable": true
        },
      ],
      "language": {
        "url": "<?= SERVIDOR ?>lib/datatable-1.10.25/js/Spanish.json"
      }

    });
  });
</script>