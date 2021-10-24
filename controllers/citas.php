<?php

class Citas extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->citasagregadas = [];
        $this->view->clientes = [];
        $this->view->psicologos = [];
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $citasagregadas = $this->model->getCitasAgregadas();
        $clientes = $this->model->getCliente();
        $psicologos = $this->model->getPsicologo();
        
        $this->view->citasagregadas = $citasagregadas;
        $this->view->clientes = $clientes;
        $this->view->psicologos = $psicologos;

        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'cliente'){       
                $this->view->render('clienteapp/index');
            }elseif($_SESSION['rol'] == 'psicologo'){
                $this->view->render('psicologoapp/index');
            }else{
                header('location: '. constant('URL'));
            }
        }else{
            header('location: '. constant('URL'));
        }
    }
}

?>