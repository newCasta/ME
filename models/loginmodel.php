<?php

class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function hash($pass){
        return md5($pass);
    }

    public function userExist($datos){
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :user AND password = :pass');
            $query->execute(['user' => $datos['user'], 'pass' => $this->hash($datos['pass'])]);
            $row = $query->fetch(PDO::FETCH_NUM);
            if($row == true){
                $_SESSION['id'] = $row[0];
                $_SESSION['user'] = $row[1];
                $_SESSION['correo'] = $row[3];
                $_SESSION['rol'] = $row[4];
                #echo 'has iniciado sesion';
                return true;
            }else{
                #echo 'usuario o contraseña incorrecta';
                return false;
            }
        }catch(PDOException $e){
            return false;
        }
    }

    public function validar($datos){
        if($this->userExist($datos)){
            switch($_SESSION['rol']){
                case 'admin':
                    header('location: '. constant('URL'));
                break;
                case 'cliente':
                    header('location: '. constant('URL').'citas');
                break;
                case 'psicologo':
                    header('location: '. constant('URL').'citas');
                break;
            }
        }else{
            return false;
        }
    }
}

?>