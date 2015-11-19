<?php
if(isset($_GET['ruta'])){
    $url = filter_input(INPUT_GET, 'ruta', FILTER_SANITIZE_MAGIC_QUOTES);
    if($url == 'gestiondatoscae'){
        require_once './controladores/CGestiondatoscae.php';
        CGestiondatoscae::get_data();
        if(
        isset($_POST['programa_academico'])
        && isset($_POST['usuario_administrativo'])
        && isset($_POST['descripcion'])
        ){
            CGestiondatoscae::insert_data_cae();
        }
    }
    else if($url == 'gestiondatoscategorias'){
        require_once './controladores/CGestiondatoscategorias.php';
        CGestiondatoscategorias::get_data();
        if(
        isset($_POST['cat_ta_fun']) && 
        isset($_POST['descripcion']) && 
        isset($_POST['ruta'])){
            CGestiondatoscategorias::insert_data_gdcae();
        }
    }
    else if($url == 'gestiondatosequipos'){
        require_once './controladores/CGestiondatosequipos.php';
        CGestiondatosequipos::get_data();
    }
    else if($url == 'gestiondatosfacultades'){
        require_once './controladores/CGestiondatosfacultades.php';
        CGestiondatosfacultades::get_data();
        if(isset($_POST['nombre']) && isset($_POST['codigo'])){
            CGestiondatosfacultades::insert_data_fac();
        }
    }
    else if($url == 'gestiondatospermisos'){
        //require_once './controladores/CGestiondatospermisos.php';
        //CGestiondatospermisos::get_data();
    }
    else if($url == 'gestiondatosrolesusuarios'){
        require_once './controladores/CGestiondatosrolesusuarios.php';
        CGestiondatosrolesusuarios::get_data();
        if(isset($_POST['tipo_usuario']) && isset($_POST['tipo_categoria'])){
            CGestiondatosrolesusuarios::insert_data_rol_usuario();
        }
    }
    else if($url == 'gestiondatossalassalones'){
        require_once './controladores/CGestiondatossalassalones.php';
        CGestiondatossalassalones::get_data();
        if(isset($_POST['programa']) && isset($_POST['sala_salon'])){
            CGestiondatossalassalones::insert_programa_sala_salon();
        }
    }
    else if($url == 'gestiondatostiposusuario'){
        
    }
    else if($url == 'gestiondatostipousuario'){
        
    }
    else if($url == 'gestiondatosusuarios'){
        
    }
    else if($url == 'registrarequipomaterialeducativo'){
        
    }
    else if($url == 'registrarprogramaacademico'){
        
    }
    else if($url == 'reigistroexepciones'){
        
    }
    else{
        echo 'La pagina solicitada no existe';
    }
}