$(document).ready( () => {

  function validar_usuario_contrasenia (){
    if($('#email').val() == 'ferpeke@gmail.com' && $('#contrasenia').val() == '1234'){
      Swal.fire({
        icon: 'success',
        title: 'Bienvenido Administrador!!',
        showConfirmButton: false
      })
      setTimeout(() => {
        window.location = 'admin';
      }, 1000);
    } else if ($('#email').val() == 'jadepeke@gmail.com' && $('#contrasenia').val() == '1234') {
      Swal.fire({
        icon: 'success',
        title: 'Bienvenido Reclutador!!',
        showConfirmButton: false
      })
      setTimeout(() => {
        window.location = 'reclutador';
      }, 1000);
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Usuario no encontrado!!'
      })
    }
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