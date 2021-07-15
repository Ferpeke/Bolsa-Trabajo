<div class="table table-responsive">
  <table class="table table-hover" id="tablaTrabajosaDataTable">
    <thead>
      <tr style="text-align: center;">
        <th scope="col">Nombre del Trabajo</td>
        <th scope="col">Descripción</td>
        <th scope="col">Fecha de Publicación</td>
        <th scope="col">Categoria</td>
      </tr>
    </thead>
    <tbody>
      <tr style="text-align: center;">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
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