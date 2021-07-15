<?php
require_once 'pagina-elementos/navbar.php';

require_once './app/conexion.php';
$conexion = conexion();
$sql = "SELECT id_trabajo, nombre_trabajo, salario, municipio_alcaldia, direccion, dias_semana, horario_entrada, horario_salida, requisitos, tiempo_contratacion
        FROM t_trabajos ORDER BY fecha_insersion DESC LIMIT  0,9;";
$datos = $conexion->query($sql);
while ($mostrar = mysqli_fetch_assoc($datos)) {

?>

  <div class="contenedor-empleo">
    <div class="container mt-4">
      <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-12 text-center">
          <div class="box">
            <div class="box-title">
              <h2><i class="fas fa-money-check mr-2"></i><?php echo $mostrar['nombre_trabajo']; ?></h3>
            </div>
            <hr>
            <div class="row mt-lg-2 mt-xl-2">
              <div class="col-lg-3 border border-success">
                <h4 class="text text-left"><i class="fas fa-dollar-sign mr-1"></i> <?php echo $mostrar['salario']; ?> pesos al mes</h4>
              </div>
              <div class="col-lg border border-warning">
                <span class="text text-justify"><i class="fas fa-road mr-3"></i><?php echo $mostrar['direccion']; ?></span>
              </div>
              <div class="col-lg-4 border border-info">
                <h4><i class="fas fa-map-marker-alt mr-2"></i><?php echo ucwords($mostrar['municipio_alcaldia']); ?></h4>
              </div>
            </div>
            <div class="row mt-lg-2 mt-xl-2">
              <div class="col-lg-5 border border-success">
                <h4><i class="fas fa-calendar-day mr-2"></i><?php echo ucwords($mostrar['dias_semana']); ?></h4>

              </div>
              <div class="col-lg-4 border border-success">
                <h4><i class="far fa-clock mr-2"></i><i class="fas fa-door-open"></i><?php echo ucwords($mostrar['horario_entrada']); ?></h4>

              </div>
              <div class="col-lg-3 border border-success">
                <h4><i class="far fa-clock mr-2"></i><i class="fas fa-door-closed"></i><?php echo ucwords($mostrar['horario_salida']); ?></h4>

              </div>
            </div>
            <div class="row mt-lg-2">
              <div class="col-lg-8 border border-dark">
                <h4>Detalles del Trabajo:</h4>
                <?php echo ucwords($mostrar['requisitos']); ?>
              </div>
              <div class="col-lg-4 border border-primary">
                
                <h4><i class="fas fa-file-signature mr-2"></i><?php echo ($mostrar['tiempo_contratacion']);?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<?php


}

?>
<!-- <div class="col-lg-4 col-xs-12  text-center">
        <div class="box">
          <div class="box-title">
            <h3></h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12 text-center">
        <div class="box">
          <div class="box-title">
            <h3></h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12 text-center">
        <div class="box">
          <div class="box-title">
            <h3></h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12 text-center">
        <div class="box">
          <div class="box-title">
            <h3></h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12 text-center">
        <div class="box">
          <div class="box-title">
            <h3></h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12 text-center">
        <div class="box">
          <div class="box-title">
            <h3><swal-footer></swal-footer>/h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12  text-center">
        <div class="box">
          <div class="box-title">
            <h3></h3>       
            <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-12 text-center">
        <div class="box">
          <div class="box-title">
            <h3>/h3>
          </div>
          <div class="box-text">
            <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
          </div>
          <div class="box-btn">
            <a href="descripcion-trabajo">Learn More</a>
          </div>
        </div>
      </div>
    </div> -->

<script src="<?= SERVIDOR ?>manager/descripcion_trabajo.js"></script>
<?php
require_once 'pagina-elementos/footer.php';
?>