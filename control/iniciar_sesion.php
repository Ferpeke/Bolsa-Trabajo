<?php
  session_start();
  require_once '../app/conexion.php';
  $conexion = conexion();
  $usuario = $_POST['email'];
  $password = $_POST['contrasenia'];
  $sql = "SELECT count(*) as existeUsuario FROM t_admin WHERE correo = '$usuario' AND contrasenia = '$password'";
  $resultado = mysqli_query($conexion, $sql);
  $respuesta = mysqli_fetch_array($resultado)['existeUsuario'];
  if($respuesta > 0){
    $_SESSION['admin'] = $usuario;
    echo 1;
  } else{
    $sql = "SELECT count(*) as existeUsuario FROM t_reclutador WHERE correo = '$usuario' AND contrasenia = '$password'";
    $resultado = mysqli_query($conexion, $sql);
    $respuesta = mysqli_fetch_array($resultado)['existeUsuario'];
    if($respuesta > 0){
      $_SESSION['reclutador'] = $usuario;
      echo 2;
    } else {
      echo 0;
    }
  }

  
?>