<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Registrar Equipo y Material Educativo</legend>
            <h5>Facultad X</h5>
            <h6>Centro de Ayuda Educativa X</h6>
            <div class="form-group">
                <label for="programa" class="col-lg-2 control-label">Programa</label>
                <div class="col-md-5">
                    <select name="programa" id="programa" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Programa 1</option>
                        <option value="">Programa 2</option>
                        <option value="">Programa 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="equipo" class="col-lg-2 control-label">Equipo</label>
                <div class="col-md-5">
                    <select name="equipo" id="equipo" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Equipo 1</option>
                        <option value="">Equipo 2</option>
                        <option value="">Equipo 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="serial" class="col-lg-2 control-label">Serial</label>
                <div class="col-md-5">
                    <input type="number" id="serial" name="serial" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                <div class="col-md-5">
                    <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="estado" class="col-lg-2 control-label">Estado</label>
                <div class="col-md-5">
                    <select name="estado" id="estado" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Estado 1</option>
                        <option value="">Estado 2</option>
                        <option value="">Estado 3</option>
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
</div>
<div class="well bs-component">
    <fieldset>
        <legend>Listado de Equipos y Materiales Educativos</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tipo de Equipo</th>
                        <th>Centro de Ayuda Educativa</th>
                        <th>Serial</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Serial</td>
                        <td>Tipo X</td>
                        <td>Centro X</td>
                        <td>123456</td>
                        <td class="col-md-5">
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