<?php
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

        //$objeto = new ConexionBD();
        //$conexion = $objeto->get_conexion();
    
        $idusuario = $_POST['idusuario'];
        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);

?>

<?php if(CRUD("UPDATE usuarios SET clave = '$clave' WHERE idusuario ='$idusuario'", "u")):?>
    <script>
        alertify.success("Clave Actualizado...");
        $('#modalKeyUpd').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else:?>
    <script>
        alertify.error("Error al actualizar clave...");
        $('#modalKeyUpd').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif?>