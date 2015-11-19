<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Usuarios</legend>
            <div class="form-group">
                <label for="identificacion" class="col-lg-2 control-label">Identificación</label>
                <div class="col-md-5">
                    <input type="number" id="identificacion" name="identificacion" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombres" class="col-lg-2 control-label">Nombres</label>
                <div class="col-md-5">
                    <input type="text" id="nombres" name="nombres" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-lg-2 control-label">Email</label>
                <div class="col-md-5">
                   <input type="mail" id="Email" name="email" class="form-control" required>
                </div>
            </div>
             <div class="form-group">
                <label for="tipo_usuario" class="col-lg-2 control-label">Tipo de Usuario</label>
                <div class="col-md-5">
                    <select name="tipo_usuario" id="tipo_usuario" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Usuario X</option>
                        <option value="">Usuario X</option>
                    </select>
                </div>
            </div>
             <div class="form-group">
                <label for="programa_academico" class="col-lg-2 control-label">Programa Académico</label>
                <div class="col-md-5">
                    <select name="programa_academico" id="programa_academico" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="">Programa X</option>
                        <option value="">Programa X</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="usuario" class="col-lg-2 control-label">Usuario</label>
                <div class="col-md-5">
                   <input type="text" id="usuario" name="usuario" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="contrasena" class="col-lg-2 control-label">contraseña</label>
                <div class="col-md-5">
                    <input type="text" id="contrasena" name="contrasena" class="form-control" required>
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
        <legend>Listado Datos Usuarios</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Identificación</th>
                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Tipo Usuario</th>
                        <th>Programa Académico</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>Juana juanita Unicor Unicor</td>
                        <td>juana@juana.com</td>
                        <td>juanitalabonita</td>
                        <td>Usuario Clase A</td>
                        <td>Programa X</td>
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