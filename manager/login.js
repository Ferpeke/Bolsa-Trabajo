$(document).ready( () => {

  function validar_usuario_contrasenia (){
    console.log(sha1($('#contrasenia').val()))
    $.ajax({
      type: 'POST',
      url: 'control/iniciar_sesion.php',
      data:{
        'email' : $('#email').val(),
        'contrasenia' : sha1($('#contrasenia').val())
      },
      success : respuesta =>{
        if(respuesta == 1){
          Swal.fire({
                icon: 'success',
                title: 'Bienvenido Administrador!!',
                showConfirmButton: false
          });
          setTimeout(() => {
               window.location = 'admin';
          }, 1000);
        } else if (respuesta == 2){
          Swal.fire({
            icon: 'success',
            title: 'Bienvenido Reclutador!!',
            showConfirmButton: false
          })
          setTimeout(() => {
            window.location = 'reclutador';
          }, 1000);
        }else {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Usuario no encontrado!!'
          })
        }
      }

    });
  }
  
  function validar_campos_vacios(){
    if($('#email').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Ingrese su "Email"'
      });

    }else if($('#contrasenia').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Ingrese su Contraseña'
      })
    } else {
      validar_usuario_contrasenia();
    }
  }
  $('#entrar').click( () =>{
    validar_campos_vacios();
    
  });

});