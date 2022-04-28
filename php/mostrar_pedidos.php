<?php

  require_once "conexion.php";

  $conexion=conexion();
  // Initialize the session
  session_start();

  $user=$_SESSION["user"];

  $query_busqueda = "SELECT id, pastel, kilos, fecha_pedido, fecha_entrega FROM pedidos WHERE id_usuario='$user' ";

  $resultado_query = $conexion->query($query_busqueda);

  $preconstruccion_tabla="";

  while($datos_tabla=$resultado_query->fetch_assoc()){

    $preconstruccion_tabla = $preconstruccion_tabla.'
    <tr>
    <td>'.$datos_tabla['id'].'</td>
    <td>'.$datos_tabla['pastel'].'</td>
    <td>'.$datos_tabla['kilos'].'</td>
    <td>'.$datos_tabla['fecha_pedido'].'</td>
    <td>'.$datos_tabla['fecha_entrega'].'</td>
    
    <td>
      <span 
        class="btn btn-warning" 
        data-toggle="modal" 
        data-target="#modal_update_pedido" 
        onclick="precarga_pedidos('.$datos_tabla['id'].')"
      >
        <i class="fas fa-edit"></i>
      </span>
    </td>
    <td>
      <span 
        class="btn btn-danger" 
        onclick="eliminar_pedidos('.$datos_tabla['id'].')"
      >
        <i class="fas fa-trash-alt"></i>
      </span>
    </td>
  <tr>';
}

$conexion->close();

echo '
  <table class="table table stripped">
    <thead>
      <th>Id</th>
      <th>Pastel</th>
      <th>Kilos</th>
      <th>Fecha del pedido</th>
      <th>Fecha de entrega</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </thead>
    <tbody>
      '.$preconstruccion_tabla.'
    </tbody>
  </table>

    ';



?>

