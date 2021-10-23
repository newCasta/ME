<?php

class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->titulo = 'Error 404';
        $this->view->mensaje = 'La pagina o recurso no existe';
        $this->view->render('error/index');
        #echo '<p>Error al cargar recurso</p>';
    }
}

?>