function login(){

  if($('#usuario').val()=="" && $('#password').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "No deje ningun campo vacio"

    });
    return false;  
  }else if($('#usuario').val()==""){

    Swal.fire({
      icon:"error",
      title: 'Opps',
      text: 'Falta Ingresar Usuario'

    });
    return false;
  }else if($('#password').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Falta Ingresar Contraseña"
    });
    return false;
  }

  iniciar= "usuario=" + $('#usuario').val() +
  "&password=" + $('#password').val();

  console.log(iniciar);

  $.ajax({
    type: "POST",
    url: "php/login.php",
    data: iniciar,
    success: function(r){
      
      if(r==1){
        
        Swal.fire({
          icon: "success",
          title: "Perfecto !!!",
          text: "Conectado"
        });
        console.log("conectado");
        window.location = "activo";
        return false;
      }else{
        Swal.fire({
          icon: 'error',
          title: "Woooo, Algo salió mal",
          text: "Error",
          footer: "Powered by Coder"
        });
        console.log(r);
        //console.log("desconectado");
        return false;

      }

    }
  });


}

function registro(){
  
  if($('#regis_usuario').val()=="" && $('#regis_password').val()=="" && $('#rep_password').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "No dejes campos vacios"
    });
    return false;
  }else if($('#regis_usuario').val()==""){
    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa tu Usuario"
    });
    return false;
  }else if($('#regis_password').val()==""){
    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa Password"
    });
    return false;
  }else if($('#rep_password').val()==""){
    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "De Favor Repetir Password"
    });
    return false;
  }

  
  informacion= "regis_usuario=" + $('#regis_usuario').val() +
  "&regis_password=" + $('#regis_password').val();

  console.log(informacion);


  $.ajax({
    type: "POST",
    url: "php/guardar_usuario.php",
    data: informacion,
    success: function(r){
      if(r==1){
        $('#formulario_login')[0].reset();//Limpia las cajas para evitar errores
        Swal.fire({
          icon: "success",
          title: "Perfecto !!!",
          text: "Se registro tu usuario con exito"
        });
       
        return false;
      }else if(r==2){
        Swal.fire({
          icon: "error",
          title: "Este Usuario ya Esta Registrado",
          text: "Por favor escoja otro usuario"
        });
       
        return false;
      }else{
        Swal.fire({
          icon: 'error',
          title: "Woooo, Algo salió mal",
          text: "No se logró crear tu usuario",
          footer: "Powered by Coder"
        });

        return false;

      }

    }
  });

  


}

function registrar_pedidos(){

  if($('#regis_pastel').val()=="" && $('#regis_kilos').val()=="" && $('#fecha_entrega').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "No dejes campos Vacios"
    });
    return false;
  }else if($('#regis_pastel').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa Pastel"
    });
    return false;
  }else if($('#regis_kilos').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa Kilos"
    });
    return false;
  }else if($('#fecha_entrega').val()==""){

    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa fecha de entrega"
    });
    return false;
  }

  pedido= "regis_pastel=" + $('#regis_pastel').val() +
    "&regis_kilos=" + $('#regis_kilos').val() + 
    "&fecha_entrega=" + $('#fecha_entrega').val();
  
  console.log(pedido);

  $.ajax({
    type: "POST",
    url: "php/guardar_pedidos.php",
    data: pedido,
    success: function(r){
      
      if(r==1){
        $('#formulario_pedido')[0].reset();//Limpia las cajas para evitar errores
        Swal.fire({
          icon: "success",
          title: "Perfecto !!!",
          text: "Se Pedido con exito"
        });
       
        return false;
      }else{
        Swal.fire({
          icon: 'error',
          title: "Woooo, Algo salió mal",
          text: "No se logró crear tu Pedido",
          footer: "Powered by Coder"
        });
        
        return false;

      }

    }

  });



}

//pedidos
function mostrar_datos(){
  $.ajax({
    url:'php/mostrar_pedidos.php',
    success: function(r){
      $('#datos_tabla').html(r);
    }
  });
}

function eliminar_pedidos(id){
  Swal.fire({
    title: '¿Estas Seguro?',
    text: "¡No podrás revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, bórralo!'
  }).then((result) => {
    if (result.value) {

      $.ajax({
        type: 'POST',
        data: 'id=' + id,
        url: 'php/eliminar_pedidos.php',
        success: function(r){
          console.log(r);
          if(r==1){
            mostrar_datos();
            Swal.fire({
              icon: "success",
              title: "Opps",
              text: "Ingresa fecha de entrega"
            });
            return false;
          }else{
            Swal.fire({
              icon: "error",
              title: "Opps",
              text: "Algo salio mal"
            });
            return false;
          }
        }
      });

    }
  });
  return false;
}

function precarga_pedidos(id){

  $.ajax({
    type: 'POST',
    data:"id=" + id,
    url: 'php/precarga_pedidos.php',
    success: function(r){

      //convertimos r a un objeto json valido
      datos_precarga = jQuery.parseJSON(r);

      $('#update_id').val(datos_precarga['id']);
      $('#update_pastel').val(datos_precarga['pastel']);
      $('#update_kilos').val(datos_precarga['kilos']);
      $('#update_fecha_pedido').val(datos_precarga['fecha_pedido']);
      $('#update_fecha_entrega').val(datos_precarga['fecha_entrega']);

    }
  });
}

function actualiza_pedidos(){

  if($('#update_pastel').val() == ""){
    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa Pastel"
    });
    return false;
  }else if($('#update_kilos').val()==""){
    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa Kilos"
    });
    return false;
  }else if($('#update_fecha_entrega').val()==""){
    Swal.fire({
      icon: "error",
      title: "Opps",
      text: "Ingresa Kilos"
    });
    return false;
  }

  //alert($('#formulario_actualiza_estudiante').serialize());
  $.ajax({
    type: 'POST',
    data: $('#formulario_update_pedido').serialize(),
    url:'php/actualizar_pedidos.php',
    success: function(r){
      //console.log(r);
      if(r==1){
      
        mostrar_datos();
        Swal.fire({
          icon: "success",
          title: "Perfecto",
          text: "Se actualizó la información del pedido!"
        });
        return false;
      }else{
        Swal.fire({
          icon: "error",
          title: "Opps",
          text: "Algo salio mal"
        });
        return false;
      }
    }

  });

}
