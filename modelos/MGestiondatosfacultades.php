<?php
require_once 'Modelobase.php';
class MGestiondatosfacultades extends Modelobase{
    public static function get_facultades() {
        return parent::all('facultades', 'nombre');
    }
    public static function save_data_fac($facultad, $codigo) {
        $consulta = "INSERT INTO facultades () VALUES (NULL, '$facultad', '$codigo')";
        return parent::save_data($consulta);
    }
}
