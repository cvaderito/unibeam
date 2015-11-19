<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Tipos de Usuarios</legend>
            <div class="form-group">
                <label for="cat_ta_fun" class="col-lg-2 control-label">Categorías, Tareas, Función</label>
                <div class="col-md-5">
                    <input type="text" id="cat_ta_fun" name="cat_ta_fun" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-lg-2 control-label">Descripción Tipo Usuario</label>
                <div class="col-md-5">
                    <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="ruta" class="col-lg-2 control-label">Ruta</label>
                <div class="col-md-5">
                    <input type="text" id="ruta" name="ruta" class="form-control">
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
        <legend>Listado Datos Tipos de Usuarios</legend>
        <div class="table-responsive">
            <table class="table table-bordered table-hovers">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th>Ruta</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td><?= ucfirst($categoria->categoria) ?></td>
                            <td class="col-md-6">
                                <p class="text-justify">
                                    <?= ucfirst($categoria->descripcion) ?>
                                </p>
                            </td>
                            <td><?= $categoria->ruta ?></td>
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