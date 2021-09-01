<?php 
    class Rd // Redireccionar
    {
        public function Admin()
        {
            if($_SESSION["tipo"] == 1)
            {

            }
            elseif($_SESSION["tipo"] == 2)
            {
                header("Location:../operador/");
        
                }
                else
                {
                    header("Location:../../index.php");

                }

                }

                public function Operador()
                {
                    if($_SESSION["tipo"] == 2)
                    {
        
                    }
                    elseif($_SESSION["tipo"] == 1)
                    {
                        header("Location:../admin/");
                
                     }
                     else
                {
                    header("Location:../../index.php");

            }
        }

    }
 
        
?>