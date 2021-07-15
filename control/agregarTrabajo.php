<?php
  require_once '../app/conexion.php';
  $conexion = conexion();
  $id_reclutador = htmlentities($_POST['id_reclutador']);
  $nombre_trabajo = htmlentities($_POST['nombre_trabajo']);
  $salario = htmlentities($_POST['salario_trabajo']);
  $municipio_alcaldia = htmlentities($_POST['municipio_alcaldia']);
  $direccion = htmlentities($_POST['direccion']);
  $horario_entrada = htmlentities($_POST['horario_entrada']);
  $horario_salida = htmlentities($_POST['horario_salida']);
  $dias_trabajo = htmlentities($_POST['dias_trabajo']);
  $requisitos = htmlentities($_POST['requisitos']);
  $tiempo_contratacion = htmlentities($_POST['tiempo_contratacion']);

  $valida_alcaldia = "SELECT count(*) as existeAlcaldiaMunicipio FROM t_municipios_alcaldias WHERE nombre = '$municipio_alcaldia';";
  $resp = mysqli_query($conexion, $valida_alcaldia);
  $resp = mysqli_fetch_array($resp)['existeAlcaldiaMunicipio'];
  if($resp > 0){
    $sql = "INSERT INTO t_trabajos(id_reclutador, nombre_trabajo, salario, municipio_alcaldia, direccion, horario_entrada, horario_salida, dias_semana, requisitos, tiempo_contratacion) VALUES 
                  ($id_reclutador, '$nombre_trabajo', '$salario', '$municipio_alcaldia', '$direccion', '$horario_entrada', '$horario_salida', '$dias_trabajo', '$requisitos', '$tiempo_contratacion')";
    $query = $conexion->prepare($sql);
    $resultado = $query->execute();
    echo $resultado;
    $conexion->close();
  } else {
    echo 2;
    $conexion->close();
  }
  
?>