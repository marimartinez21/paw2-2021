<?php
    include '../../../models/conexion.php';

    $objeto = new ConexionBD();
    $conexion = $objeto->get_conexion();


    $user = $_POST['user'];

    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);

    $tipo = $_POST['tipo_user'];

    $tabla = "usuarios";
    $campos ="usuario, clave, token, tipo, estado";
    $valores = "'$user', '$clave', NULL, '$tipo', 1";
    $insertData = $conexion->query("INSERT INTO $tabla($campos) VALUES($valores)");
?>
<?php if($insertData):?>
    <div class="alert alert-success">Datos registrados...</div>
<?php else:?>
    <div class="alert alert-danger">Error al registrar datos...</div>
<?php endif?>