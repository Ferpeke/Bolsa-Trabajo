<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 barra_navegacion">
        <nav class="navbar navbar-expand-lg navbar-light text-white navbar-laravel">
          <div class="container">
            <a class="navbar-brand" href="pagina-principal"><i class="fas fa-briefcase mr-2"></i>Bolsa de Trabajo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link " href="login">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Registrarse</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card" style="background-color: #a0d2f3;">
          <div class="card-body">
            <h1 class="text-center card-title"> Registro para Administrador</h1>
            <hr>
            <form id = 'formRegistroAdmin'>
              <div class="container">
                <div class="row justify-content-around py-4">
                  <div class="col-sm-6 mt-1">
                    <label for="nombre">Nombre(s):</label>
                    <input type="text" name="nombre" id="nombre" class="form-control rounded-pill " autocomplete="off" placeholder="Ingresa tú Nombre(s)">

                    <label for="peterno">Apellido Paterno:</label>
                    <input type="text" name="paterno" id="paterno" class="form-control rounded-pill" autocomplete="off" placeholder="Ingresa tú Apellido Paterno">

                    <label for="materno">Apellido Materno:</label>
                    <input type="text" name="materno" id="materno" class="form-control rounded-pill" autocomplete="off" placeholder="Ingresa tú Apellido aterno">
                  </div>
                  <div class="col-sm-6 mt-1">
                    <label for="email">Correo:</label>
                    <input type="email" name="email" id="email" class="form-control rounded-pill" autocomplete="off" placeholder="Ej. alguien@gmail.com">

                    <label for="contrasenia">Contraseña:</label>
                    <input type="password" name="contrasenia" id="contrasenia" class="form-control rounded-pill" autocomplete="off" placeholder="Ingresa tú Contraseña">
                    <label for="confirmar_contrasenia">Confirmar Contraseña:</label>
                    <input type="password" id="confirmar_contrasenia" class="form-control rounded-pill" autocomplete="off" placeholder="Ingresa tú Contraseña">
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-sm-8 mt-2">
                    <span class="btn btn-sm rounded-pill text-white" style="width: 100%; background-color: #4183D7;" id="btn_usuario">Registrar</span>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-sm-8 mt-2 text-right">
                    <a   class="text-dark text-center" href="registro">Registrarse como reclutador</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <br>
  <?php
  require_once 'pagina-elementos/footer.php'
  ?>
  <script src="<?=SERVIDOR?>manager/administrador/registro-admin.js"></script>