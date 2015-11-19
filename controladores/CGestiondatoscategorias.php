<?php
require_once './modelos/MGestiondatoscategorias.php';
require_once 'Controladorbase.php';
class CGestiondatoscategorias extends Controladorbase{
   public static function get_data() {
       $categorias = MGestiondatoscategorias::get_categorias(); 
       require_once './vistas/gestiondatoscategorias.php';
       
   }
   public static function insert_data_gdcae() {
       $categoria = filter_input(INPUT_POST, 'cat_ta_fun', FILTER_SANITIZE_STRING);
       $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
       $ruta = filter_input(INPUT_POST, 'ruta', FILTER_SANITIZE_MAGIC_QUOTES);
       
       if(is_string($categoria) && is_string($descripcion) && is_string($ruta)){
           $respuesta = MGestiondatoscategorias::save_data_gdcae(parent::clean($categoria), 
            parent::clean($descripcion), parent::clean($ruta));
            parent::message($respuesta, 'success', 'error');
       }
   }
}
