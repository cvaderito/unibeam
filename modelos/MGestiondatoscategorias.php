<?php
require_once 'Modelobase.php';
class MGestiondatoscategorias extends Modelobase{
    public static function get_categorias() {
        return parent::all('categorias', 'categoria');
    }
    public static function save_data_gdcae($categoria, $descripcion, $ruta) {
        $consulta = "INSERT INTO categorias () VALUES (NULL, '$categoria', '$descripcion', '$ruta')";
        return parent::save_data($consulta);
    }
}
