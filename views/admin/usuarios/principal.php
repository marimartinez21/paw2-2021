<script src="../../public/js/funciones-navbar.js"></script>
<script src="../../public/js/funciones-usuarios.js"></script>

<div class="card">
  <div class="card-header bg-dark text-white">
  <b>Panel Usuario</b>
  </div>
    <div class="card-body">
        <div id="result-form">
            <div class="row">
                <div class="col-md-4">
                    <form id="data-user">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Usuario</span>
                            </div>
                            <input type="text" name="user" class="form-control" placeholder="Usuario" require="ON">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Contraseña</span>
                            </div>
                            <input type="password" name="clave" class="form-control" require="ON">
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

                <div class="col-md-8">
                    <?php include 'table_usuarios.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>