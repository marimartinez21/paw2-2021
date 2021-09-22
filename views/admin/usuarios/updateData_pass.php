<?php
include '../../../models/conexion.php';
include '../../../controllers/procesos.php';
include '../../../models/procesos.php';

$idusuario = $_GET['idusuario'];

$dataUser = CRUD("SELECT * FROM usuarios WHERE idusuario='$idusuario'", "s");
?>

<script src="../../public/js/funciones-usuarios.js"></script>
<form id="UpdPass">
<input type="hidden" name="idusuario" value="<?php echo $idusuario;?>">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nueva contraseña: </span>
        </div>
        <input type="password" name="clave" class="form-control" required="ON" placeholder="Ingresar nueva contraseña">
    </div>

        <button class="btn btn-success">Actualizar</button>
</form>