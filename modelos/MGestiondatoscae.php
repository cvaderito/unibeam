<?php
require_once 'Modelobase.php';
class MGestiondatoscae extends Modelobase{
    public static function get_programas() {
        return parent::all('programas', 'nombre');
    }
    public static function get_users_cae() {
        $consulta = "SELECT c.id, p.nombre, u.usuario, c.descripcion FROM cae AS c
                JOIN programas AS p on c.idprograma=p.id JOIN usuarios AS u 
                ON c.idusuario=u.id JOIN tipousuario AS tu ON 
                u.idtipousuario=tu.id WHERE tu.id=3";
        return Modelobase::fetch_object($consulta);
    }
    public static function get_users_administrativos() {
        $consulta = "SELECT u.id, u.usuario FROM usuarios AS u JOIN tipousuario
                AS tu ON u.idtipousuario=tu.id WHERE tu.id=3";
        return Modelobase::fetch_object($consulta);
    }
    public static function save_data_cae($programa, $usuario, $descripcion){
        $consulta = "INSERT INTO cae () VALUES (NULL, '$programa', '$usuario', '$descripcion')";
        return parent::save_data($consulta);
    }
}
