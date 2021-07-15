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
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Iniciar Sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

<main>
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-md-4 color-contenedor-login rounded p-4 shadow">
        <div class="text-center">
          <img src="https://image.flaticon.com/icons/png/512/81/81591.png" width="100">
        </div>
        <div class="text-center">
          <h1>Iniciar Sesion</h1>
        </div>
        <hr>
        <form id="formLogin">
          <div>
            <label for="email">Email:</label>
            <input type="email" class="form-control rounded-pill" id="email" name="email" autocomplete="off" placeholder="Ingresa tu Correo">
          </div>
          <div>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" class="form-control rounded-pill" id="contrasenia" name="contrasenia" autocomplete="off" placeholder="Ingresa tu Email">
          </div>
        </form>
        <div class="mt-3 text-center">
          <span class="btn btn-primary w-50 btm-control rounded-pill" id="entrar">Entrar</span>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
  require_once 'pagina-elementos/footer.php';
?>
