<?php

class Observacion extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje= "";
        $this->view->cita = [];
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $cita = $this->model->getCita();
        $this->view->cita = $cita;

        if(isset($_SESSION['rol'])){
            if($_SESSION['rol'] == 'psicologo'){       
                $this->view->render('observacion/index');
            }else{
                header('location: '. constant('URL'));
            }
        }else{
            header('location: '. constant('URL'));
        }
    }

    function observacionCita(){
        $idcita = $_POST['idcita'];
        $cliente = $_POST['cliente'];
        $psicologo = $_POST['psicologo'];
        $duracion = $_POST['duracion'];
        $observacion = $_POST['observacion'];

        $mensaje = "";
        if($this->model->observacionCita(['idCita' => $idcita, 'cliente' => $cliente, 'psicologo' => $psicologo, 'duracion' => $duracion, 'observacion' => $observacion ])){
            $mensaje = "Observacion de cita existosa";
        }else{
            $mensaje = "Observacion de cita fallida";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>