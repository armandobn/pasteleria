<?php

function conexion(){
  $conexion = new mysqli('127.0.0.1', 'root', '', 'pasteleria');

  if($conexion->connect_errno){
    echo "Error en la conexion al modelo: <br>" . $conexion->connect_error;
  }

  $conexion->set_charset("utf8");

  return $conexion;
}

?>