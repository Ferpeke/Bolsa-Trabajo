
<?php
  require_once './app/conexion.php';
  $conexion = conexion();
  $usuario = $_SESSION['reclutador'];
  $sql = "SELECT id_reclutador FROM t_reclutador WHERE correo='$usuario';";
  $dato = $conexion->query($sql);
  while($mostrar = mysqli_fetch_assoc($dato)){
    $id_reclutador = $mostrar['id_reclutador'];
  }
  $conexion->close();
  $conexion = conexion();
  $sql = "SELECT nombre_trabajo, salario, municipio_alcaldia, direccion, fecha_insersion  FROM t_trabajos WHERE id_reclutador = $id_reclutador  ORDER BY fecha_insersion DESC;";
  $query = $conexion->query($sql);
?>

<div class="table table-responsive">
  <table class="table table-hover" id="tablaTrabajosaDataTable">
    <thead>
      <tr style="text-align: center;">
        <th scope="col">Nombre del Trabajo</td>
        <th scope="col">Dirección</td>
        <th scope="col">Alcaldía o Municipio</td>
        <th scope="col">Salario</td>
        <th scope="col">Fecha de Publicación</td>
      </tr>
    </thead>
    <?php
      while($datos = mysqli_fetch_assoc($query)){
      
      
    ?>
    <tbody>
      <tr style="text-align: center;">
        <td><?php echo $datos['nombre_trabajo'];?></td>
        <td><?php echo $datos['direccion'];?></td>
        <td><?php echo $datos['municipio_alcaldia'];?></td>
        <td><?php echo $datos['salario'];?></td>
        <td><?php echo $datos['fecha_insersion'];?></td>
      </tr>
    </tbody>
    <?php
      }
    ?>
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