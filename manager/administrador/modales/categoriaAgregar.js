$(document).ready(() =>{
  function validar_campos_vacios(){
    if($('#nombre_Categoria').val() == ''){
      console.log($('#nombreCategoria').val())
      Swal.fire({
        icon: 'error', 
        title: 'Ups..!' , 
        html: 'Te falta llenar el campo <strong>"Nombre de la Categoria"</strong>'
      })
    } else if ($('#descripcion_Categoria').val() == '') {
      Swal.fire({
        icon: 'error', 
        title: 'Ups..!',
        html: 'te falta llenar el campo <strong>"Descripcion de la Categoria"</strong>'
      });
    } else {
     Swal.fire({
          icon: 'success', 
          title: 'Categoria Guardada..!',
          showConfirmButton: false,
    })
      setTimeout(() => {
        $('#nombre_Categoria').val('');
        $('#descripcion_Categoria').val('');
      }, 1000);
    }
  }

  $('#btn_GuardarCategoria').click(() =>{
    console.log($('#nombre_Categoria').val())
    validar_campos_vacios();
  });
});