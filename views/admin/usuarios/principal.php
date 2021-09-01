<script src="../../public/js/funciones-usuarios.js"></script>
<div class="card">
    <div class="card-header bg-dark text-white">
        <b>Panel Usuarios</b>
    </div>
    <div class="card-body">
        <div id="result-form"> 
            <form id="data-user" style="width:500px">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                       <span class="input-group-text" id="basic-addon1">Usuario: </span>
                    </div>
                    <input type="text" name="user" class="form-control" placeholder="Usuario" required="ON">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Contraseña: </span>
                    </div>
                    <input type="password" name="clave" class="form-control" required="ON">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo Usuario:</label>
                    </div>
                    <select class="custom-select" name="tipo_user" id="tipo-user">
                        <option value="0" disabled selected>Seleccione Tipo</option>
                        <option value="1">Administrador</option>
                        <option value="2">Operador</option>
                    </select>
                </div>
                <div style="margin-top:10px">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>