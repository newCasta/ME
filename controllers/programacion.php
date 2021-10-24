<?php

class Programacion extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->clientes = [];
        $this->view->mensaje = "";
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $clientes = $this->model->getCliente();
        $this->view->clientes = $clientes;
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
        $fecha = $_POST['fecha'];
        $cliente = $_POST['cliente'];
        $psicologo = $_SESSION['id'];

        $mensaje = "";
        if($this->model->agregarCita(['fecha' => $fecha, 'cliente' => $cliente, 'psicologo' => $psicologo])){
            $mensaje = "Cita agregada correctamente";
        }else{
            $mensaje = "La cita no se pudo agregar";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}

?>