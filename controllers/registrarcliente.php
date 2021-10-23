<?php

class RegistrarCliente extends Controller{
    function __construct(){
        parent::__construct();
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $this->view->render('clientes/index');
    }

    function registrarCliente(){
        #echo 'alumno cerado';
        $documentoid = $_POST['documentoid'];
        $fechaexp = $_POST['fechaexp'];
        $fechaven = $_POST['fechaven'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $correo = $_POST['correo'];
        $nombres = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $edad = $_POST['edad'];
        if($this->model->insertDocumento(['documentoid' => $documentoid, 'fechaexp' => $fechaexp, 'fechaven' => $fechaven])){
            #echo "nuevo alumno";
        }
        if($this->model->insertUsuario(['documentoid' => $documentoid, 'usuario' => $usuario, 'password' => $password, 'correo' => $correo, 'tipo' => 'cliente'])){
            #echo "nuevo alumno";
        }
        if($this->model->insertCliente(['documentoid' => $documentoid, 'nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'edad' => $edad])){
            #echo "nuevo alumno";
        }
    }
}

?>