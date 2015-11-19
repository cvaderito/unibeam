<?php
require_once 'Modelobase.php';
class MGestiondatosrolesusuarios extends Modelobase{
    public static function get_tipo_usuario() {
        return parent::all('tipousuario', 'descripcion');
    }
    public static function get_categorias() {
        return parent::all('categorias', 'categoria');
    }
    public static function get_usuario_categoria() {
        $consulta = "SELECT tu.descripcion, c.categoria FROM tipousuario AS tu JOIN rolesusuarios AS ru
                ON tu.id=ru.idtipousuario JOIN categorias AS c ON c.id=ru.idcategoria";
        return parent::fetch_object($consulta);
    }
    public static function save_datos_rol_usuario($tipousuario, $categoria) {
        $consulta = "INSERT INTO rolesusuarios () VALUES (NULL, '$tipousuario', '$categoria')";
        return parent::save_data($consulta);
    }
}
