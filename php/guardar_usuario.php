<?php
  include_once "conexion.php";

  $conexion = conexion();

  //$datos_usuario= array($_POST['regis_usuario'],$_POST['regis_password']);

  $usuario= $_POST['regis_usuario'];
  $password= sha1($_POST['regis_password']);

  $res= mysqli_query($conexion,"SELECT id FROM usuarios WHERE usuario='$usuario'");
  $row=mysqli_fetch_array($res);
  $count= mysqli_num_rows($res);
  
  $cuenta=2;
  if($count==1){
    
    echo $cuenta;
  }else{
    
    $query_insert="INSERT INTO usuarios(usuario, password)
    values ('$usuario', '$password')";
    echo $resultado_query= mysqli_query($conexion, $query_insert);
  
    
  }

 
?>