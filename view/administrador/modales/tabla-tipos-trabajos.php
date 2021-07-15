<?php
  require_once './app/conexion.php';
  $conexion = conexion();
  $usuario = $_SESSION['admin'];
  $sql = "SELECT id_admin FROM t_admin WHERE correo='$usuario';";
  $dato = $conexion->query($sql);
  while($mostrar = mysqli_fetch_assoc($dato)){
    $id_admin = $mostrar['id_admin'];
  }
  $conexion->close();
  $conexion = conexion();
  $sql = "SELECT id_admin,  nombre_categoria, descripcion  FROM t_categoria WHERE id_admin = $id_admin  ORDER BY nombre_categoria DESC;";
  $query = $conexion->query($sql);
?>

<div class="table table-responsive">
  <table class="table table-hover" id="tablaCategoriaDataTable">
    <thead>
      <tr style="text-align: center;">
        <th scope="col">No.Admin</td>
        <th scope="col">Nombre</td>
        <th scope="col">Descripción</td>
      </tr>
    </thead>
    <?php
      while($datos = mysqli_fetch_assoc($query)){
    ?>
    <tbody>
      <tr style="text-align: center;">
        <td><?php echo $datos['id_admin'];?></td>
        <td><?php echo $datos['nombre_categoria'];?></td>
        <td><?php echo $datos['descripcion'];?></td>
      </tr>
    </tbody>
    <?php
      }
    ?>
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