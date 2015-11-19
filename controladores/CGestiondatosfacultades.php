<?php
require_once './modelos/MGestiondatosfacultades.php';
require_once 'Controladorbase.php';
class CGestiondatosfacultades extends Controladorbase{
    public static function get_data() {
        $facultades = MGestiondatosfacultades::get_facultades();
        require_once './vistas/gestiondatosfacultades.php';
    }
    public static function insert_data_fac() {
        $facultad = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
        $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
        
        if(is_string($facultad) && is_numeric($codigo)){
           $respuesta = MGestiondatosfacultades::save_data_fac(parent::clean($facultad), 
            parent::clean($codigo));
           parent::message($respuesta, 'success', 'error');
        }
    }
}
