<?php
  require_once './app/conexion.php';
  require_once '.../../control/categorias/mostrar_datos.php';
  
?>

<div class="table table-responsive">
  <table class="table table-hover" id="tablaCategoriaDataTable">
    <thead>
      <tr style="text-align: center;">
        <th scope="col">Nombre</td>
        <th scope="col">Descripción</td>
      </tr>
    </thead>
    <tbody>
      <tr style="text-align: center;">
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    var table = $('#tablaCategoriaDataTable').DataTable({
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