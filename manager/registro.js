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
    } else if ($('#numero_telefonico').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: 'Te falta llenar el campo <strong>"Numero Telefonico"</strong>'
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
        Swal.fire({
          icon: 'success',
          title: 'Genial..!',
          html: '<strong class = "text-success">Registro correcto</strong>',
          showConfirmButton: false
        })
        setTimeout(() => {
          window.location = 'login';
        }, 2000);
        
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Ups..!',
          html: 'Las contraseñas <strong class = "text-danger">No coinciden</strong>'
        })
      }
    }
  }
  $('#btn-registrar').click( () =>{
    validar_campos_vacios();
  });
});