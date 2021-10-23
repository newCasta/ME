<?php

class Login extends Controller{
    function __construct(){
        parent::__construct();
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
        $this->model->validar(['user' => $user, 'pass' => $pass]);
    }
}

?>