<?php
    include '../../../models/conexion.php';

        $objeto = new ConexionBD();
        $conexion = $objeto->get_conexion();
    
        $user = $_POST['user'];

        $clave = password_hash($_POST['clave'],PASSWORD_DEFAULT);

        $tipo = $_POST['tipo_user'];

        $tabla ="usuarios";
        $campos = " usuario, clave, token, tipo, estado";
        $valores = " '$user', '$clave',NULL,'$tipo',1";

        $insertData = $conexion->query("INSERT INTO $tabla($campos) VALUES($valores)");
    ?>
    <?php if($insertData):?>
        <script>
            alert("Datos registrados...");
            $("#contenido").load("usuarios/principal.php");
            </script>
        <?php else:?>
            <script>
                 alert("Error al registrar datos...");
            $("#contenido").load("usuarios/principal.php");
                </script>
            <?php endif?>