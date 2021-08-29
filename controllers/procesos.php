<?php 
   function Accesologia($user, $passw) 
   {
       $consultas = new login();
       $data = $consultas->getDataUser($user);

       if($data)
        {
            foreach ($data AS $result)
           {
            $idusuario = $result['idusuario'];
            $hash = $result['clave'];
            $tipo = $result['tipo'];
            $estado = $result['estado'];

            
           }

           if($estado  == 1)
           {
               if(password_verify($pass,$hash))
                { 

                  if($tipo == 1) //vista Admin
                 { 
                     $_SESSION["idusuario"] = $idusuario;
                     $_SESSION["user"] = $user;
                     $_SESSION["tipo"] = $tipo;
                     header("location: ../views/Admin/");
                 }
                   else  
                   {
                    $_SESSION["idusuario"] = $idusuario;
                    $_SESSION["user"] = $user;
                    $_SESSION["tipo"] = $tipo;
                    header("location: ../views/operador/"); 
                   }  


        }
        else
        {
            header("location:../index.php?msj=".base64_encode("el usuario no tiene permisos de  acceso..."));

        }

        else
         {
            header("location:../index.php?msj=".base64_encode("el usuario no  exite..."));
 
         }
    }
?>