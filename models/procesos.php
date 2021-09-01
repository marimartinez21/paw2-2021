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
        if($estado) == 1)
        {
           if(password_verify($passw,$hash))
           {
               if(tipo == 1) //Vista Admin
               {

        
        else
        {
    {
            header("Location:../index.php?msj=".base64_encode("El usuario no tiene permisos de acceso..."));
    }

    }
?>