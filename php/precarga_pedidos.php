<?php

  require_once "conexion.php";

  $conexion = conexion();

  $id_recibido = $conexion->real_escape_string(htmlentities($_POST['id']));

  $query_select_id = "SELECT id, pastel, kilos, fecha_pedido, fecha_entrega FROM pedidos WHERE id=?";

  $select_id_preparado = $conexion->prepare($query_select_id);

  $select_id_preparado->bind_param('i', $id_recibido);

  $select_id_preparado->execute();

  $extractor_datos_query = $select_id_preparado->get_result()->fetch_assoc();

  echo json_encode($extractor_datos_query); //lo devulve un string

  //$select_id_preparado->close();

?>