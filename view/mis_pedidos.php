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
    <!-- inicio: construccion de la card -->
    <div class="card bg-light mb-3">
      <div class="card-header">

        <i class="fas fa-box mr-2" style="font-size: 35;">
        </i>Mis Pedidos
      </div>
      <div class="card-body">
        <!-- inicio: construccion del espacio para el boton de agregar con icono -->
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-end">
            
            </div>
            <!-- agregamos un div para presentar el contenido de la tabla: lo importante de este es el ID -->
            <div id="datos_tabla" class="mt-3"></div>
          </div>
        </div>
      </div>
      <div class="card-footer lead text-muted text-right">
        By Coder
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  mostrar_datos();
});
</script>

</div>

<?php
}  
?>


