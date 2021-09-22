<<<<<<< HEAD
<?php
    class Procesos
    {
        /*Modelo para realizar CRUD*/   
        public function isdu($query,$tipo)
        {
            $row = NULL;
            $modelo = new ConexionBD();
            $conexion =$modelo->get_conexion();
            $stm = $conexion->prepare($query);

            if($tipo =="s" || $tipo =="S")
            {
                $stm->execute();
                while($result = $stm->fetch())
                {
                    $row[] =$result;
                }
                return $row;
            }
            else
            {
                if(!$stm)
                {
                    return 0;
                }
                else
                {
                    $stm->execute();
                    return 1;
                }
            }
        }

        /*Modelo para contar registros*/
        public function row_data($query)
        {
            $modelo = new ConexionBD();
            $conexion =$modelo->get_conexion();
            $stm = $conexion->query($query);
            $num_rows = $stm->rowCount();
            return $num_rows;
        }
        
    }
?>
=======
<<<<<<< HEAD
<?php
    function AccesoLogin($user, $passw)
    {
        $consultas = new Login();
        $data = $consultas->GetDataUser($user);

        if($data)
        {
            foreach ($data AS $result)
            $idusuario = $result['idusuario'];
            $hash = $result['clave'];
            $tipo = $result['tipo'];
            $estado = $result['estado'];
        }

        if($estado== 1)
        {
           if(password_verify($passw,$hash))
           {
               if(tipo == 1) //Vista Admin
               {
                    $_SESSION ['idusuario']=$idusuario;
                    $_SESSION ['user']= $user;
                    $_SESSION ['tipo']= $tipo;
                    header("location: ../views/admin/");
                }
           
              else 
              { 
                 $_SESSION ['idusuario']=$idusuario;
                 $_SESSION ['user']= $user;
                 $_SESSION ['tipo']=$tipo;
                 header("location: ../views/operador/");
              }
            }
        
            else
            { 
               header("Location:../index.php?msj=".base64_encode("contraseña incorrecta..."));
            }
         
        }
       else
           { 
             header("Location:../index.php?msj=".base64_encode("El usuario no tiene permisos de acceso..."));
           }
    }

        
?>
=======
>>>>>>> 711c306b6de93748f0d1dad8283420d38798aebd
>>>>>>> 7eb16301d837e6da56644729b99f03544473d741
