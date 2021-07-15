<?php
require_once 'app/config.php'
?>
<!DOCTYPE html>
<html lang='es'>

  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>@Bolsa-Trabajo</title>
  </head>
    <?php
      require_once 'app/dependecias.php'
    ?>

  <body>
    
      <?php

        if (isset($_GET['vista'])) {
          switch ($_GET['vista']) {
            case 'registro':
              require_once 'view/registro.php';
              break;
            case 'registro-admin':
              require_once 'view/registro_admin.php';
              break;
            case 'login':
              require_once 'view/login.php';
              break;
            case 'pagina-principal':
              require_once 'view/pagina-principal.php';
              break;
            case '':
              require_once 'app/conexion.php';
              break;
            case 'admin':
              require_once 'view/administrador/tipos-trabajo.php';
              break;
            case 'reclutador':
              require_once 'view/reclutador/trabajos-reclutador.php';
              break;
            case 'descripcion-trabajo':
              require_once 'view/descripcion-trabajos/descripcion-trabajo.php';
              break;
            case 'cerrar-sesion':
              require_once './control/cerrar-sesion.php';
              break;
            default:
              require_once 'view/error/error_404.php';
              break;
          }
        } else {
          header('location:pagina-principal');
        }
      ?>
  </body>
</html>