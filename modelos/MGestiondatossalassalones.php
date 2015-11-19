<?php
require_once 'Modelobase.php';
class MGestiondatossalassalones extends Modelobase{
   public static function get_programas() {
       return parent::all('programas', 'nombre');
   }
   public static function get_programa_sala_salon() {
       $consulta = "SELECT * FROM salas AS s JOIN programas AS p ON
               s.idprograma=p.id";
       return parent::fetch_object($consulta);
   }

   public static function save_programa_sala_salon($programa, $sala_salon){
       $consulta = "INSERT INTO salas () VALUES (NULL, '$sala_salon', '$programa')";
       return parent::save_data($consulta);
   }
}
