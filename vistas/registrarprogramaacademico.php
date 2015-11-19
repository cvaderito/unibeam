<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Registrar Programa Académico</legend>
            <h5>Facultad X</h5>
            <div class="form-group">
                <label for="cod_programa" class="col-lg-2 control-label">Código del Programa</label>
                <div class="col-md-7">
                    <input type="number" name="cod_programa" id="cod_programa" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="n_programa" class="col-lg-2 control-label">Nombre del Programa</label>
                <div class="col-md-7">
                    <input type="text" name="n_programa" id="n_programa" class="form-control input-sm">
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
        <legend>Listado de Programas</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre del Programa</th>
                        <th>Facultad</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234567</td>
                        <td>Programa X</td>
                        <td>Facultad X</td>
                        <td>
                            <a href="#" title="Editar" class="btn btn-info">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="#" title="Eliminar" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </fieldset>
</div>