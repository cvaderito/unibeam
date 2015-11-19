<div class="well bs-component">
    <form method="post" action="#" enctype="application/x-www-form-urlencoded" class="form-horizontal" role="form">
        <fieldset>
            <legend>Gestión Datos Centro de Ayudas Educativas</legend>
            <h5>Facultad X</h5>
            <div class="form-group">
                <label for="programa_academico" class="col-lg-2 control-label">Programa Académico</label>
                <div class="col-md-5">
                   <select name="programa_academico" id="programa_academico" class="form-control" required>
                       <option value="">Seleccione un programa</option>
                       <?php foreach ($programas as $programa): ?>
                       		<option value="<?= $programa->id ?>"><?= ucfirst($programa->nombre) ?></option>
                       <?php endforeach ?>
                   </select>
                </div>
            </div>
            <div class="form-group">
                <label for="usuario_administrativo" class="col-lg-2 control-label">Usuario Administrativo CAE</label>
                <div class="col-md-5">
                   <select name="usuario_administrativo" id="usuario_administrativo" class="form-control" required>
                       <option value="">Seleccione un usuario</option>
                       <?php foreach ($usuarios as $usuario): ?>
                       		<option value="<?= $usuario->id ?>"><?= ucfirst($usuario->usuario) ?></option>
                       <?php endforeach ?>
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
    <br>
    <br>
    <fieldset>
        <legend>Listado Datos Centro de Ayudas Educativas</legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Programa</th>
                        <th>Usuario Administrativo</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($caes as $cae): ?>
                    	<tr>
	                    	<td><?= $cae->nombre ?></td>
	                        <td><?= $cae->usuario ?></td>
	                        <td class="col-md-6">
	                            <p class="text-justify">
	                                <?= $cae->descripcion ?>
	                            </p>
	                        </td>
	                        <td>
	                            <a href="?ruta=gestiondatoscae" title="Editar" class="btn btn-info">
	                                <span class="glyphicon glyphicon-edit"></span>
	                            </a>
	                            <a href="?ruta=gestiondatoscae" title="Eliminar" class="btn btn-danger">
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