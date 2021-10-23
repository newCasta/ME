<?php

class Programacion extends Controller{
    function __construct(){
        parent::__construct();
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'psicologo'){       
                $this->view->render('agregarcitas/index');
            }elseif($_SESSION['rol'] == 'cliente' || $_SESSION['rol'] == ''){
                header('location: '. constant('URL'));
            }
        }else{  
            header('location: '. constant('URL'));
        }
    }

    function programarcitas(){
        
    }
}

?>