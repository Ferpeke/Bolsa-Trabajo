<?php
  
  function conexion() {
    $conexion = new mysqli('localhost', 'root', 'Nandodrago4', 'bolsa_trabajo', 33061);

    if($conexion->errno){
      echo 'Error en la conexion'. ' '. $conexion->errno;
    } 
    $conexion->set_charset('utf8');
    return $conexion;
    
  }
  
  
?>