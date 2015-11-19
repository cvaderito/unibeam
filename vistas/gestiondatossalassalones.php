<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos de Salas-Salones</legend>
            <h5>Facultad X</h5>
            <div class="form-group">
                <label for="programa" class="col-lg-2 control-label">Programa</label>
                <div class="col-md-5">
                    <select name="programa" id="programa" class="form-control" required>
                        <option value="">Seleccione un programa</option>
                       <?php foreach ($programas as $programa): ?>
                            <option value="<?= $programa->id ?>"><?= ucfirst($programa->nombre) ?></option>
                       <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sala_salon" class="col-lg-2 control-label">Nombre Sala-Salón</label>
                <div class="col-md-5">
                    <input type="text" id="sala_salon" name="sala_salon" class="form-control">
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-md-5">
                   <input type="submit" value="Agregar" class="btn btn-info">
                </div>
            </div>
        </fieldset>
    </form>
</div>
<div class="well bs-component">
    <fieldset>
        <legend>Listado Gestión Datos de Salas-Salones</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre Sala-Salón</th>
                        <th>Programa Académico</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($programa_sala_salones as $value): ?>
                        <tr>
                            <td><?= ucfirst($value->nombre_sala) ?></td>
                            <td><?= ucfirst($value->nombre) ?></td>
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