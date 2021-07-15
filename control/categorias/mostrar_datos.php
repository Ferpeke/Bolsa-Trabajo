<?php

  require_once './app/conexion.php';
  $conexion = conexion();
  $usuario = $_SESSION['admin']; 
  $sql = "SELECT id_admin FROM t_admin WHERE correo = '$usuario'";
  $datos = $conexion->query($sql);
  echo $datos;
  
  
?>