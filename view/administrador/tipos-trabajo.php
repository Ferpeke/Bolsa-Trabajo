<?php
  session_start();

  require_once './app/conexion.php';
  $conexion = conexion();
  $usuario = $_SESSION['admin']; 
  $sql = "SELECT nombre, paterno, materno FROM t_admin WHERE correo = '$usuario'";
  $datos = $conexion->query($sql);
  while($mostrar = mysqli_fetch_assoc($datos)){
    $nombre = $mostrar['nombre'];
    $paterno = $mostrar['paterno'];
    $materno = $mostrar['materno'];
  }
  if(isset($_SESSION['admin'])){

  
?>


<!-- cambiamos el color de la barra para distiinguir el tipo de usuarios que hay -->
<!-- recordemos que solo hay dos tipos el reclutador y administrador -->
<style>
  .color-barra {

    background-color: #77dd77;

  }

  .nav-link {
    color: rgb(175, 25, 25) !important;
  }

  .nav-link:hover {
    color: red !important;
  }

</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 barra_navegacion bg-success ">
      <nav class="navbar navbar-expand-lg navbar-light text-white navbar-laravel ">
        <div class="container">
          <a class="navbar-brand" href="admin"><i class="fas fa-tools mr-2"></i>Administrador</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <span class="navbar-brand"><i class="fas fa-user mr-2"></i><?php echo $nombre . ' '. $paterno . ' '. $materno ?></span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cerrar-sesion"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-12 p-0">
      <div class="jumbotron color-barra text-black">
        <h5 class="display-4 text-center">AGREGAR CATEGORIA DE TRABAJO</h5>
        <div class="text-center mt-3">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
            <span class="fas fa-plus-circle mr-lg-2"></span>
            Agregar Categoria
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card text-left">
        <div class="card-body" style="background-color: #bce3cc;" >
          <h4 class="card-title text-center"><i class="fas fa-cubes mr-2"></i>Mis categorias</h4>
          <hr>
           <?php
            require_once 'modales/tabla-tipos-trabajos.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- agregar modal de catgorias -->
<?php
  require_once 'modales/categoriaAgregar.php';
?>
<?php
  }else {
    header('location:pagina-principal');
  }
  
  
?>