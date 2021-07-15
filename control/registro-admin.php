<?php

  require_once '../app/conexion.php';
  
  $nombre  = htmlentities($_POST['nombre']);
  $paterno = htmlentities($_POST['paterno']);
  $materno = htmlentities($_POST['materno']);
  $correo = htmlentities($_POST['email']);
  $password = sha1(htmlentities($_POST['contrasenia']));

  $conexion = conexion();

  $sql = "INSERT INTO t_admin(nombre, materno, paterno,correo, contrasenia) 
                        VALUES  ('$nombre', '$materno', '$paterno','$correo', '$password')";
  $query = $conexion->prepare($sql);
  $resultado = $query->execute();
  echo $resultado;
  $conexion->close();
?>