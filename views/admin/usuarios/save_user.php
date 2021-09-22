<?php
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

        //$objeto = new ConexionBD();
        //$conexion = $objeto->get_conexion();
    
        $user = $_POST['user'];

        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);

        $tipo = $_POST['tipo_user'];

        $tabla ="usuarios";
        $campos = " usuario, clave, token, tipo, estado";
        $valores = " '$user', '$clave',NULL,'$tipo',1";

        $query1 = "SELECT *FROM usuarios WHERE usuario = '$user'";
        $query2 = "INSERT INTO $tabla($campos) VALUES($valores)";
        //$insertData = $conexion->query("INSERT INTO $tabla($campos) VALUES($valores)");
    ?>
    <?php if(CountReg($query1)> 0):?>
        <script>
            alertify.error("Usuario ya existe...");
            $("#contenido").load("usuarios/principal.php");
        </script>
    
    <?php else:?>
        <?php if(CRUD($query2,"i")):?>
            <script>
                alertify.success("Datos registrados...");
                $("#contenido").load("usuarios/principal.php");
            </script>
        <?php else:?>
            <script>
                alert("Error al registrar datos...");
                $("#contenido").load("usuarios/principal.php");
            </script>
        <?php endif?>
    <?php endif?>