<?php 
//print_r($_POST);

  require_once "conexion.php";

  $conexion = conexion();

  $id_recibido = $conexion->real_escape_string(htmlentities($_POST['id']));

  //print_r($id_recibido);

  $query_drop = "DELETE FROM pedidos WHERE id=?";

  $drop_preparado = $conexion->prepare($query_drop);

  $drop_preparado->bind_param('i', $id_recibido);

  echo $drop_preparado->execute();

  $drop_preparado->close();

?>