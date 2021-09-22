<?php

    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

    $idusuario = $_GET['idusuario'];

    $DeleteUser = CRUD("DELETE FROM `usuarios` WHERE `usuarios`.`idusuario` = '$idusuario'","d");

?>

<?php if($DeleteUser):?>
    <script>
        alertify.success("Usuario eliminado exitosamente");
        //$("#UserUpd").modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else:?>
    <script>
        alertity.error("Error al borrar usuario");
        //$("#UserUpd").modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif?>