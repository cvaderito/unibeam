<?php
require_once './modelos/MGestiondatoscae.php';
require_once 'Controladorbase.php';
class CGestiondatoscae extends Controladorbase{
    public static function get_data() {
        $programas = MGestiondatoscae::get_programas();
        $usuarios = MGestiondatoscae::get_users_administrativos();
        $caes = MGestiondatoscae::get_users_cae();
        require_once './vistas/gestiondatoscae.php';
    }
    public static function insert_data_cae() {
        $programa = filter_input(INPUT_POST, 'programa_academico', FILTER_SANITIZE_NUMBER_INT);
        $usuario = filter_input(INPUT_POST, 'usuario_administrativo', FILTER_SANITIZE_NUMBER_INT);
        $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
        
        if(is_numeric($programa) && is_numeric($usuario) && is_string($descripcion)){
            $respuesta = MGestiondatoscae::save_data_cae(parent::clean($programa), 
            parent::clean($usuario), parent::clean($descripcion));
            parent::message($respuesta, 'success', 'error');
        }
    }
}
