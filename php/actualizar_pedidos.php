<?php
//print_r($_POST);

require_once "conexion.php";
  
$conexion = conexion();

$datos_recibidos =  array(
  $conexion->real_escape_string(htmlentities($_POST['update_id'])),
  $conexion->real_escape_string(htmlentities($_POST['update_pastel'])),
  $conexion->real_escape_string(htmlentities($_POST['update_kilos'])),
  $conexion->real_escape_string(htmlentities($_POST['update_fecha_entrega']))                         
); 

//print_r($datos_recibidos);

$query_update = "UPDATE pedidos 
              SET pastel=?, kilos=?, fecha_entrega=? 
              WHERE id=?";

$update_preparado = $conexion->prepare($query_update);

$update_preparado->bind_param('sisi', 
                                                  $datos_recibidos[1], 
                                                  $datos_recibidos[2],
                                                  $datos_recibidos[3],
                                                  $datos_recibidos[0] 
                                                );

echo $update_preparado->execute();

$update_preparado->close();


?>
