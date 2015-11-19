<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Roles Usuarios</legend>
            <div class="form-group">
                <label for="tipo_usuario" class="col-lg-2 control-label">Tipo de usuario</label>
                <div class="col-md-5">
                    <select name="tipo_usuario" id="tipo_usuario" class="form-control" required>
                        <option value="">Seleccione tipo usuario</option>
                        <?php foreach ($tipo_usuario as $tipousuario): ?>
                            <option value="<?= $tipousuario->id ?>"><?= ucfirst($tipousuario->descripcion) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tipo_categoria" class="col-lg-2 control-label">Tipo Categoria</label>
                <div class="col-md-5">
                    <select name="tipo_categoria" id="tipo_categoria" class="form-control" required>
                        <option value="">Seleccione una categoría</option>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria->id ?>"><?= ucfirst($categoria->categoria) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-md-5">
                   <input type="submit" value="Agregar" class="btn btn-info">
                </div>
            </div>
        </fieldset>
    </form>
    <br>
    <br>
    <fieldset>
        <legend>Listado Gestión Datos Roles Usuarios</legend>
        <div class="table-responsive">
            <table class="table table-bordered table-hovers">
                <thead>
                    <tr>
                        <th>Tipo Usuario</th>
                        <th>Tipo Categoria</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarioscategorias as $usuariocategoria): ?>
                        <tr>
                            <td><?= ucfirst($usuariocategoria->descripcion) ?></td>
                            <td><?= ucfirst($usuariocategoria->categoria) ?></td>
                            <td>
                                <a href="#" title="Editar" class="btn btn-info">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="#" title="Eliminar" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </fieldset>
</div>