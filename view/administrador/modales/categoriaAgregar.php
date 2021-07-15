<?php
  require_once './app/conexion.php';
  $conexion = conexion();
  $usuario = $_SESSION['admin']; 
  $sql = "SELECT id_admin FROM t_admin WHERE correo = '$usuario'";
  $datos = $conexion->query($sql);
  while($mostrar = mysqli_fetch_assoc($datos)){
    $id_admin = $mostrar['id_admin'];
  }
  if(isset($_SESSION['admin'])){

  
?>
<!-- Modal Categoria-->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar una Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formAgregarCategoria">
            <input type="text" value="<?php echo $id_admin?>" hidden  name="id_admin">
            <label for="nombreCategoria">Nombre de la Categoria:</label>
            <input type="text" id="nombre_categoria" name="nombre_categoria" class="form-control">

            <label for="descripcionCategoria">Descripcion de la Categoria</label>
            <textarea name="descripcion_categoria" id="descripcion_categoria" cols="15" rows="5" class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <span class="btn btn-danger" data-dismiss="modal">Cerrar</span>
        <span class="btn btn-success" id="btn_GuardarCategoria">Guardar Categoria</span>
      </div>
    </div>
  </div>
</div>
<script src="<?=SERVIDOR?>manager/administrador/modales/categoriaAgregar.js"></script>

<?php
  
  }else{
    header('location = admin');
  }
  
?>