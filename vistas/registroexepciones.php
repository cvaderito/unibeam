<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Registro de Excepciones</legend>
            <div class="form-group">
                <label for="tipo_equipo" class="col-lg-2 control-label">Tipo Equipo o Material</label>
                <div class="col-md-5">
                    <select name="tipo_equipo" id="tipo_equipo" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Equipo 1</option>
                        <option value="">Material 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="centro_ayuda_material" class="col-lg-2 control-label">Centro Ayuda Educativa</label>
                <div class="col-md-5">
                    <select name="centro_ayuda_material" id="centro_ayuda_material" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Centro x</option>
                        <option value="">Centro x</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exepcion_alumno" class="col-lg-2 control-label">Excepción Alumno</label>
                <div class="col-md-5">
                    <select name="exepcion_alumno" id="exepcion_alumno" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Excepción X</option>
                        <option value="">Excepción X</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exepcion_docente" class="col-lg-2 control-label">Exepción Docente</label>
                <div class="col-md-5">
                    <select name="exepcion_docente" id="exepcion_docente" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Excepción X</option>
                        <option value="">Excepción X</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exepcion_programa_estudiante" class="col-lg-2 control-label">Exepción Programa Estudiante</label>
                <div class="col-md-5">
                    <select name="exepcion_programa_estudiante" id="exepcion_programa_estudiante" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Excepción X</option>
                        <option value="">Excepción X</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exepcion_programa_docente" class="col-lg-2 control-label">Exepción Programa Docente</label>
                <div class="col-md-5">
                    <select name="exepcion_programa_docente" id="exepcion_programa_docente" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Excepción X</option>
                        <option value="">Excepción X</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                <div class="col-md-5">
                    <textarea name="descripcion" id="descripcion" rows="5" class="form-control"></textarea>
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
        <legend>Listado Registro de Excepciones</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo Equipo</th>
                        <th>Centro Ayuda</th>
                        <th>Exepción Alumno</th>
                        <th>Exepción Docente</th>
                        <th>Exepción Programa Alumno</th>
                        <th>Exepción Programa Docente</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>Equipo X</td>
                        <td>Centro Ayuda X</td>
                        <td>Exepción Alumno X</td>
                        <td>Exepción Docente X</td>
                        <td>Exepción Programa Alumno X</td>
                        <td>Exepción Programa Docente X</td>
                        <td class="col-md-3">
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
                    <tr>
                        <td>12345</td>
                        <td>Equipo X</td>
                        <td>Centro Ayuda X</td>
                        <td>Exepción Alumno X</td>
                        <td>Exepción Docente X</td>
                        <td>Exepción Programa Alumno X</td>
                        <td>Exepción Programa Docente X</td>
                        <td class="col-md-3">
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