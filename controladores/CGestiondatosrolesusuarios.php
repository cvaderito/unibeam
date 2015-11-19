<?php
require_once './modelos/MGestiondatosrolesusuarios.php';
require_once 'Controladorbase.php';
class CGestiondatosrolesusuarios extends Controladorbase{
    public static function get_data() {
        $tipo_usuario = MGestiondatosrolesusuarios::get_tipo_usuario();
        $categorias = MGestiondatosrolesusuarios::get_categorias();
        $usuarioscategorias = MGestiondatosrolesusuarios::get_usuario_categoria();
        require_once './vistas/gestiondatosrolesusuarios.php';
    }
    public static function insert_data_rol_usuario() {
        $idusuario = filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_NUMBER_INT);
        $idcategoria = filter_input(INPUT_POST, 'tipo_categoria', FILTER_SANITIZE_NUMBER_INT);
        if(is_numeric($idusuario) && is_numeric($idcategoria)){
            $respuesta = MGestiondatosrolesusuarios::save_datos_rol_usuario(parent::clean($idusuario), 
                    parent::clean($idcategoria));
            parent::message($respuesta, 'success', 'error');
        }
    }
}
