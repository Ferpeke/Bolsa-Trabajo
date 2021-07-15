<?php
  require_once '../../app/conexion.php';
  $conexion = conexion();
  $nombre = $_POST['nombre_categoria'];
  $descripcion = $_POST['descripcion_categoria'];
  $id_admin = $_POST['id_admin'];
  
$conexion = conexion();
$sql = "INSERT INTO t_categoria(id_admin , nombre_categoria, descripcion) VALUES (?,?,?)";
$query = $conexion->prepare($sql);
$query->bind_param('iss', $id_admin, $nombre, $descripcion);
$respuesta = $query->execute();
echo $respuesta;
$conexion->close();


  
?>