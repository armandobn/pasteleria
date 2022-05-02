<?php

  include_once "conexion.php";

  $conexion=conexion();

  // Initialize the session
  session_start();

  $user=$_SESSION["user"];

  $datos_pedidos= array($_POST['regis_pastel'], $_POST['regis_kilos'], $_POST['fecha_entrega']);

  $query_insert="INSERT INTO pedidos(id_usuario, pastel, kilos, fecha_entrega)
                values('$user' ,'$datos_pedidos[0]', '$datos_pedidos[1]', '$datos_pedidos[2]')";

  //echo $user;
  echo $resultado_query= mysqli_query($conexion, $query_insert);


?>