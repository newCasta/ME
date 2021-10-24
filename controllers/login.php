<?php

class Login extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->error = "";
        #echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        if(isset($_SESSION['id'])){
            header('location: '. constant('URL'));
        }else{
            $this->view->render('login/index');
        }
    }

    function ingresar(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($this->model->validar(['user' => $user, 'pass' => $pass])){
            $this->view->mensaje = "Ingresate correctamente";
        }else{
            $this->view->error = "Usuario o contraseña incorrectos";
        }
        
        $this->render();
    }
}

?>