<?php

class RegistrarClienteModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insertDocumento($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO documentos_id(documentoId,fechaExpedicion,fechaVencimiento) VALUES(:documentoid, :fechaExpedicion, :fechaVencimiento)');
            $query->execute(['documentoid' => $datos['documentoid'], 'fechaExpedicion' => $datos['fechaexp'], 'fechaVencimiento' => $datos['fechaven']]);
            return true;
        }catch(PDOException $e){
            echo "Ya esxiste este Documento";
            return false;
        }       
    }

    public function insertUsuario($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO usuarios(idUsuario,usuario,password,correo,tipo) VALUES(:documentoid, :usuario, MD5(:password), :correo, :tipo)');
            $query->execute(['documentoid' => $datos['documentoid'], 'usuario' => $datos['usuario'], 'password' => $datos['password'], 'correo' => $datos['correo'], 'tipo' => $datos['tipo']]);
            return true;
        }catch(PDOException $e){
            echo "Ya esxiste este documento";
            return false;
        }       
    }

    public function insertCliente($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO clientes(documentoId,nombres,apellidos,telefono,edad) VALUES(:documentoid, :nombres, :apellidos, :telefono, :edad)');
            $query->execute(['documentoid' => $datos['documentoid'], 'nombres' => $datos['nombres'], 'apellidos' => $datos['apellidos'], 'telefono' => $datos['telefono'], 'edad' => $datos['edad']]);
            return true;
        }catch(PDOException $e){
            echo "Ya esxiste esta matricula";
            return false;
        }       
    }
}

?>