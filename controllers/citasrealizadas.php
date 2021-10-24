<?php

class CitasRealizadas extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->citasobservadas = [];
        $this->view->clientes = [];
        $this->view->psicologos = [];
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $citasagregadas = $this->model->getCitasObservadas();
        $clientes = $this->model->getCliente();
        $psicologos = $this->model->getPsicologo();
        
        $this->view->citasobservadas = $citasagregadas;
        $this->view->clientes = $clientes;
        $this->view->psicologos = $psicologos;

        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'psicologo'){
                $this->view->render('citasobservadas/index');
            }else{
                header('location: '. constant('URL'));
            }
        }else{
            header('location: '. constant('URL'));
        }
    }
}

?>