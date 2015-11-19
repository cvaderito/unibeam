<?php
class Controladorbase {
    public function clean($dato) {
        $dato = trim($dato);
        $dato = $GLOBALS['conexion']->real_escape_string($dato);
        return $dato;
    }
    public function message($respuesta, $success, $fail){
        if($respuesta){
            require_once './vistas/'.$success.'.html';
        }else{
            require_once './vistas/'.$fail.'.html';
        }
    }
}
