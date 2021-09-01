<?php
    session_start();
    $user = $_SESSION['user'];

     $redic = new Rd();
     $redic->admin();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminitrador</title>
    
        <!-- CSS -->
        <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	    <link rel="stylesheet" href="../../public/css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../public/css/estilo.css">
        <!-- JS -->
        <script src="../../public/js/jquery-3.5.1.slim.min.js"></script>
        <script src="../../public/js/jquery-1.9.1.min.js"></script>
        <script src="../../public/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
         <script src="../../public/js/funciones-navbar.js"></script>



</head>
<body>
     <?php include'navbar/nav.php';?>
     <div class="container-fluid " id="contenido">
         <div class="alert-seccess" style=""></div>
         <h6><b>Bienvenido/a: <?php echo $user; ?></b></h6>

      </div>
     </div>

</body>
</html>