<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Permisos</legend>
            <div class="form-group">
                <label for="nombre_usuario" class="col-lg-2 control-label">Nombre de usuario</label>
                <div class="col-md-5">
                    <select name="nombre_usuario" id="nombre_usuario" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Usuario 1</option>
                        <option value="">Usuario 2</option>
                        <option value="">Usuario 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="categoria" class="col-lg-2 control-label">Categoria</label>
                <div class="col-md-5">
                    <select name="categoria" id="categoria" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Categoria 1</option>
                        <option value="">Categoria 2</option>
                        <option value="">Categoria 3</option>
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
        <legend>Listado Gestión Datos Permisos</legend>
        <div class="table-responsive">
            <table class="table table-bordered table-hovers">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Categoria</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tipo Usuario X</td>
                        <td>Categoria X </td>
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