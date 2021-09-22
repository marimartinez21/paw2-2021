<?php
    session_start();
    include '../../controllers/redireccionar.php';
    $user = $_SESSION["user"];

    $redic = new Rd();
    $redic->Admin();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
   <!-- CSS -->
        <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public/css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../public/css/estilo.css">
        <link rel="stylesheet" href="../../public/css/alertify.min.css" />
        <link rel="stylesheet" href="../../public/css/default.min.css" />

    <!-- JS -->
        <script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
        <script src="../../public/js/alertify.min.js"></script>
        <script src="../../public/js/jquery-1.9.1.min.js"></script>
        <script src="../../public/js/bootstrap.min.js"></script>
        <script src="../../public/js/funciones-navbar.js"></script>
        <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
        

    </head>
        <?php include 'navbar/navbar.php';?>
        <div class="container-fluid" id="contenido">
            <div class="alert alert-success" style="width:400px;">
             <h6><b>Bienvenido/a: <?php echo $user; ?></b></h6>
        </div>
            
        </div>

        <?php 
        include './modals/new_passw.php';
        include './modals/update_user.php';
        ?>
</body>
</html>