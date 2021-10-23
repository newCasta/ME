<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'cliente'){       
                $this->view->render('clienteapp/index');
            }elseif($_SESSION['rol'] == 'psicologo'){
                $this->view->render('psicologoapp/index');
            }
        }else{       
            $this->view->render('main/index');
        }
    }

    function logout(){
        session_unset();
        session_destroy();
        header('location: '. constant('URL'));
    }
}

?>