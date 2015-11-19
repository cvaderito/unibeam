<?php
require_once './modelos/MGestiondatossalassalones.php';
require_once 'Controladorbase.php';
class CGestiondatossalassalones extends Controladorbase{
    public static function get_data() {
        $programas = MGestiondatossalassalones::get_programas();
        $programa_sala_salones = MGestiondatossalassalones::get_programa_sala_salon();
        require_once './vistas/gestiondatossalassalones.php';
    }
    public static function insert_programa_sala_salon() {
        $programa = filter_input(INPUT_POST, 'programa', FILTER_SANITIZE_NUMBER_INT);
        $sala_salon = filter_input(INPUT_POST, 'sala_salon', FILTER_SANITIZE_STRING);
        
        if(is_numeric($programa) && is_string($sala_salon)){
            $respuesta = MGestiondatossalassalones::save_programa_sala_salon(parent::clean($programa),
            parent::clean($sala_salon));
            parent::message($respuesta, 'success', 'error');
        }
    }
}
