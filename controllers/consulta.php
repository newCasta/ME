<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $this->view->render('consulta/index');
    }
}

?>