<?php

class Citas extends Controller{
    function __construct(){
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'cliente'){       
                $this->view->render('citas/index');
            }elseif($_SESSION['rol'] == 'psicologo' || $_SESSION['rol'] == ''){
                header('location: '. constant('URL'));
            }
        }else{
            header('location: '. constant('URL'));
        }
    }
}

?>