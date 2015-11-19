<?php
class Modelobase {
    public static function all($tabla, $order = null) {
        if($order == null){
            $sql = "SELECT * FROM  $tabla";
        }else{
            $sql = "SELECT * FROM  $tabla ORDER BY $order ASC";
        }
        $resultado = $GLOBALS['conexion']->query($sql);
        $datos = array();
        while($dato = $resultado->fetch_object()){
            $datos[] = $dato;
        }
        return $datos;
    }
    public static function fetch_object($consulta) {
        $sql = sprintf($consulta);
        $resultado = $GLOBALS['conexion']->query($sql);
        $datos = array();
        while($programa = $resultado->fetch_object()){
            $datos[] = $programa;
        }
        return $datos;
    }
    public static function save_data($consulta) {
        if($GLOBALS['conexion']->query($consulta)){
            return true;
        }else{
            return false;
        }
    }
}
