<!-- cambiamos el color de la barra para distiinguir el tipo de usuarios que hay -->
<!-- recordemos que solo hay dos tipos el reclutador y administrador -->
<style>
  .color-barra {

    background-color: #ea899a;

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
    <div class="col-lg-12 barra_navegacion color-barra">
      <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
          <a class="navbar-brand" href="reclutador"><i class="fas fa-user-plus mr-2"></i>Reclutador</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <span class="navbar-brand"><i class="fas fa-user-tie mr-2"></i>@Nombre de usuario</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pagina-principal"><i class="fas fa-sign-out-alt mr-2"></i>Salir</a>
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
      <div class="jumbotron text-dark" style="background-color: #ffc1d3;">
        <h1 class="display-4 text-center">AGREGAR TRABAJO</h1>
        <div class="text-center mt-3">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTrabajo">
            <span class="fas fa-plus-circle mr-lg-2"></span>
            Agregar un Trabajo
          </button>
        </div>
        <hr class="my-3">
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-12">
      <div class="card text-left">
        <div class="card-body" style="background-color: #feebed">
          <h4 class="card-title text-center"><i class="fas fa-briefcase mr-2"></i>Mis Trabajos</h4>
          <hr>
          <?php
          require_once 'modales/tabla-trabajos.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- agregar modal de catgorias -->
<?php
require_once 'modales/agregarTrabajo.php';
?>