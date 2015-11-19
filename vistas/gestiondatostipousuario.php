<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Tipos Usuarios</legend>
            <div class="form-group">
                <label for="codigo_tipo" class="col-lg-2 control-label">Código Tipo</label>
                <div class="col-md-5">
                    <input type="number" id="codigo_tipo" name="codigo_tipo" class="form-control input-sm" required>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                <div class="col-md-5">
                    <textarea name="descripcion" rows="5" id="descripcion" class="form-control" required>   
                    </textarea>
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
        <legend>Listado Gestión Datos Tipos Usuarios</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td class="col-md-7">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            </p>
                        </td>
                        <td>
                            <a href="#" title="Editar" class="btn btn-info">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            &nbsp
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