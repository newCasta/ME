<?php

class Pagos extends Controller{
    function __construct(){
        parent::__construct();
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){    
        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'cliente'){       
                $this->view->render('pagos/index');
            }else{
                header('location: '. constant('URL'));
            }
        }else{
            header('location: '. constant('URL'));
        }
    }
}

?>