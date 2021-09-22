<?php
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

    $dataUser = CRUD("SELECT * FROM usuarios;", "s");
    $cont = 0;
?>

<table class="table table-borderless table-responsive-xl">
    <thead class="bg-dark text-white">
        <tr>
            <th class="cHead">N°</th>
            <th class="cHead">Usuarios</th>
            <th class="cHead">Tipo</th>
            <th class="cHead">Estado</th>
            <th colspan="4" class="cHead">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dataUser AS $result):?>
            <tr>
                <td class="cHead"><?php echo $cont +=1;?></td>
                <td class="cHead"><?php echo $result['usuario'];?></td>
                <td class="cHead">
                <?php 
                    if($result['tipo'] == 1)
                    {
                        echo "Administrador";
                    }
                    else{
                        echo "Operador";
                    }
                ?>
                </td>
                <td class="cHead">
                <?php 
                    if($result['estado'] == 1)
                    {
                        echo "Habilitado";
                    }
                    else{
                        echo "Deshabilitado";
                    }
                ?> 
                </td>
                <td class="cHead">
                    <?php if($result['estado'] == 1):?>
                        <a href="" class="btn btn-info btnHDUser" id-user="<?php echo $result['idusuario'];?>" estado="0"><i class="fas fa-user-lock"></i></a>
                    <?php else:?>
                        <a href="" class="btn btn-info btnHDUser" id-user="<?php echo $result['idusuario'];?>" estado="1"><i class="fas fa-user-check" ></i></a>
                    <?php endif?>    
                </td>
                <td class="cHead">
                    <a href="" class="btn btn-success updateUser" id-user="<?php echo $result['idusuario'];?>" data-toggle="modal" ><i class="fas fa-user-edit"></i></a>
                </td>
                <td>
                <a href="" class="btn btn-danger BtnDrop-user" id-user="<?php echo $result['idusuario'];?>"><i class="fas fa-user-times"></i></a>
                </td>
                <td>
                <a href="" class="btn btn-dark upd-key" id-user="<?php echo $result['idusuario'];?>" data-toggle="modal"><i class="fas fa-key"></i></a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>

    