<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Facultades</legend>
            <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                <div class="col-md-5">
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="codigo" class="col-lg-2 control-label">Código</label>
                <div class="col-md-5">
                    <input type="number" id="codigo" name="codigo" class="form-control" required>
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
        <legend>Listado Gestión Datos Facultades</legend>
        <div class="table-responsive">
            <table class="table table-bordered table-hovers">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($facultades as $facultad): ?>
                        <tr>
                            <td><?= $facultad->codigo ?></td>
                            <td><?= ucfirst($facultad->nombre) ?></td>
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