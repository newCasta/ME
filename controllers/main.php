<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){    
        $this->view->render('main/index');
    }

    function logout(){
        session_unset();
        session_destroy();
        header('location: '. constant('URL'));
    }
}

?>