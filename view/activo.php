<?php
/*
// Inicia la seccion
session_start();
 
//Verifica si el usuario ha iniciado sesión, de lo contrario, rediríjalo a la página de inicio de sesión
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: desactivo");
    exit;
}*/
?>
<div class="container">

  <div class="row text-light">

    <div class="col-auto">
      <h4>Bienvenido, <?php echo htmlspecialchars($_SESSION["user"]); ?></h4>
    </div>

    <div class="col-auto"><a href="php/logout.php" class="btn btn-success"><i class="far fa-user"></i> Cerrar Sesion</a>
    </div>


  </div>


</div>