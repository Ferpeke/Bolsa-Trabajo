$(document).ready(() =>{
  function validar_campos_vacios(){
    if($('#nombre_categoria').val() == ''){
      console.log($('#nombreCategoria').val())
      Swal.fire({
        icon: 'error', 
        title: 'Ups..!' , 
        html: 'Te falta llenar el campo <strong>"Nombre de la Categoria"</strong>'
      })
    } else if ($('#descripcion_categoria').val() == '') {
      Swal.fire({
        icon: 'error', 
        title: 'Ups..!',
        html: 'te falta llenar el campo <strong>"Descripcion de la Categoria"</strong>'
      });
    } else {
      $.ajax({
        type: "POST",
        data: $('#formAgregarCategoria').serialize(),
        url: './control/categorias/agregarCategoria.php',
        success: respuesta =>{
          respuesta = respuesta.trim();
          if(respuesta == 1){
            Swal.fire({
              icon: 'success',
              title: 'Categoria Guardada..!',
              showConfirmButton: false,
            })
            $('#formAgregarCategoria').load('admin');
          } else{
            console.log(respuesta)
          }
        }
      });
   
      // setTimeout(() => {
      //   $('#nombre_Categoria').val('');
      //   $('#descripcion_Categoria').val('');
      // }, 1000);
    }
  }

  $('#btn_GuardarCategoria').click(() =>{
    validar_campos_vacios();
  });
});