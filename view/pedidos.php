<?php 
 // Inicia la seccion
 //session_start();
                
 //Verifica si el usuario ha iniciado sesión, de lo contrario, 
 //rediríjalo a la página de inicio de sesión
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     //header("location: desactivo");
    
     //echo "no logeado";
     
  ?>

  <div class="container">
    <div class="row text-center mt-5">
      <div class="col">
      <Strong><h3>Debes estar logeado para visualizarlo</h3></Strong>
      
      </div>
    </div>
    
  </div>
  
  
  <?php
     //exit;
 }else{
  
     echo "logeado";

?>

<div class="container">
  <div class="row">
    <div class="col">

      <form id="formulario_pedido">
        <div class="form-group">
          <label for="regis_pastel">Nombre del Pastel</label>
          <input type="text" class="form-control" id="regis_pastel" name="regis_pastel">

        </div>
        <div class="form-group">
          <label for="regis_kilos">Kilos</label>
          <input type="text" class="form-control" id="regis_kilos" name="regis_kilos">
        </div>
        <div class="form-group">
          <label for="fecha_entrega">Para que fecha lo requiere</label>
          <input type="text" class="form-control" id="fecha_entrega" name="fecha_entrega">
        </div>

      </form>

      <button type="button" class="btn btn-primary" id="btn_crear_estudiante" onclick="registrar_pedidos()">Registrar
        Pedido</button>

    </div>
  </div>
</div>


<?php

 }
?>


