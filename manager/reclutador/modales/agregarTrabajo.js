$(document).ready(() =>{

  function validar_campos_vacios() {
    if ($('#nombre_Trabajo').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta llenar el campo <strong>"Nombre del Trabajo"</strong>'
      })
    } else if ($('#salario_trabajo').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta llenar el campo <strong>"Salario"</strong>'
      })
    } else if ($('#municipio_alcaldia').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta llenar el campo <strong>"Municipio o Alcaldia"</strong>'
      })
    } else if ($('#horario_entrada').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta indicar un <strong>"Horario de entrada"</strong>'
      })
    } else if ($('#horario_salida').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta indicar un  <strong>"Horario de salida"</strong>'
      })
    } else if ($('#dias_trabajo').val() == ''){
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta llenar el campo de <strong>"Ingresa Los dias de la semana a trabajar"</strong>'
      })
    } else if ($('#nombre_Categoria').val() == '0') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta seleccionar un campo de <strong>"Categoria del Trabajo"</strong>'
      })
    } else if ($('#requisitos').val() == '') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta llenar el campo <strong>"Requisistos del trabajo"</strong>'
      })
    } else if ($('#tiempo_contrato').val() == '0') {
      Swal.fire({
        icon: 'error',
        title: 'Ups..!',
        html: 'Te falta seleccionar un campo de <strong>"Tiempo de contratación"</strong>'
      })
    } else {

      let time_1 = $('#horario_entrada').val(); 
      let time_2 = $('#horario_salida').val();
      horas_numero_1 = parseInt(time_1);
      horas_numero_2 = parseInt(time_2);
      if(horas_numero_1 == horas_numero_2){
        Swal.fire({
          icon: 'error',
          title: 'Ups..!',
          html: 'NO puedes trabajar menos de una hora!!'
        })
      } else {

        $.ajax({
          type: 'POST',
          url: 'control/agregarTrabajo.php',
          data: $('#frmAgregarTrabajo').serialize(),
          success: resp =>{
            if(resp == 2){
              Swal.fire({
                icon: 'error',
                title: 'Ups..!',
                html: 'NO se a encontrado el <strong class = "text-danger">"Municipio o Alcaldia"</strong>'
              })
            }else if(resp == 1){
              Swal.fire({
                icon: 'success',
                title: 'Genial..!',
                html: 'Se a publicado tu trabajo!!',
                showConfirmButton: false
              })
              setTimeout(() => {
                $('#tablaTrabajosaDataTable').load('reclutador')
                window.location = 'reclutador';
              }, 1000);
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Ups..!',
                html: 'No se a publicado<strong class = "text-danger">"el Trabajo"</strong>'
              })
            }
          }
        });



       
        

      }
      
    }
  }
  
  $('#btn_publicar_trabajo').click(() =>{
    validar_campos_vacios();
  });
});