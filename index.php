<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>

  <!-- Dependencias Visuales -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  <!-- Dependencias Logicas -->
  <script src="js/jquery_3.4.1/jquery.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!--Fontawesome CDN-->
  <script src="https://kit.fontawesome.com/990963a7a7.js" crossorigin="anonymous"></script>

  <script src="js/funciones.js"></script>




</head>

<body class="fondo">

  <div class="container-fluid">

    <div class="row navbar-dark bg-primary">

      <div class="col">

        <nav class="navbar navbar-expand-sm ">

          <a class="navbar-brand" href="#">Pasteleria</a>

          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>

          <div class="collapse navbar-collapse" id="collapsibleNavId">


            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria">Galeria</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Pedidos</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="pedidos">Hacer Pedido</a>
                  <a class="dropdown-item" href="mis_pedidos">Ver mi pedidos</a>
                </div>
              </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
          

              <!-- bloque dinamico actualizable dependiendo de la navegacion -->
              <?php 

                // Inicia la seccion
                session_start();
                
                //Verifica si el usuario ha iniciado sesión, de lo contrario, 
                //rediríjalo a la página de inicio de sesión
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    //header("location: desactivo");

                    include_once "view/desactivo.php";
                    
                    //echo "debes estar logeado";
                    //exit;
                }else{
                  
                  include_once "view/activo.php";
                    //echo "no estas logeado";
                }

              ?>

            </form>

          </div>
        </nav>
      </div>

    </div>


    <div class="row">

      <div class="col">

        <!-- bloque dinamico actualizable dependiendo de la navegacion -->
        <?php 
  
          if(isset($_GET['vista_solicitada'])){

            $direccion_solicitada = explode('/', $_GET['vista_solicitada']);

            switch($direccion_solicitada[0]){

              case 'mis_pedidos' :{

                require_once'view/mis_pedidos.php';
                break;
              }
              
              case 'pedidos' :{

                require_once'view/pedidos.php';
                break;
              }

              case 'galeria' :{

                require_once'view/galeria.php';
                break;
              }

              case 'inicio' :{

                require_once'view/inicio.php';
                break;
              }


              default : {

                require_once'view/inicio.php';
                break;
              }
              
            }

          }else{
            require_once 'view/inicio.php';
          }

        ?>

      </div>


    </div>

  </div>

</body>

</html>

<!-- modal -->
<?php
  require_once 'view/modal_login.php';
  require_once 'view/modal_registro.php';
  require_once 'view/modal_update_pedido.php';
?>