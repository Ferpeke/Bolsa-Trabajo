$(document). ready( () =>{
  function validar_campos_vacios(){
    if($('#nombre').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Nombre"</strong>',
        
      })
    } else if ($('#paterno').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Apellido Peterno"</strong>'
      })
    }else if ($('#materno').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Apellido Materno"</strong>'
      })
    } else if ($('#email').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Correo"</strong>'
      })
    } else if ($('#contrasenia').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Contraseña"</strong>'
      })
    } else if ($('#confirmar_contrasenia').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Confirmar Contraseña"</strong>'
      });
    }else {
      if($('#contrasenia').val() == $('#confirmar_contrasenia').val()){
        $.ajax({
          type : 'POST',
          url : './control/registro-admin.php',
          data : $('#formRegistroAdmin').serialize(),
          success: respuesta =>{
            
            if(respuesta == 1){
              Swal.fire({
                icon: 'success',
                title: 'Genial..!',
                html: '<strong class = "text-success">Registro correcto</strong>',
                showConfirmButton: false
              });
              setTimeout(() => {
                window.location = 'login';
              }, 1000);
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Ups..!',
                html: 'Registro <strong class = "text-danger">fallido</strong>'
              });
              console.log(respuesta)
            }
          }
        });
        
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Ups..!',
          html: 'Las contraseñas <strong class = "text-danger">No coinciden</strong>'
        });
      }
    }
  }
  $('#btn_usuario').click( () =>{
    console.log('hola');
    validar_campos_vacios();
  });
});