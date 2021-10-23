<?php

class RegistrarPsicologoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function isPdf($datos){
        $archivo = constant('URL') .'archivos/'. basename($datos['name']);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        if($tipoArchivo == 'pdf'){
            return true;
        }else{
            return false;
        }
    }

    public function savePdf($datos,$id){
        $archivo = constant('URL') .'archivos/'. basename($datos['name']);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        $name = 'id'. $id .'hojavida.'. $tipoArchivo;
        $ruta = 'archivos/'. $name;
        if(move_uploaded_file($datos['tmp_name'], $ruta)){
            echo 'archivo subido';
            return $name;
        }
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

    public function insertPsicologo($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO psicologos(documentoId,nombres,apellidos,telefono,hojaVida) VALUES(:documentoid, :nombres, :apellidos, :telefono, :hojavida)');
            $query->execute(['documentoid' => $datos['documentoid'], 'nombres' => $datos['nombres'], 'apellidos' => $datos['apellidos'], 'telefono' => $datos['telefono'], 'hojavida' => $datos['hojavida']]);
            return true;
        }catch(PDOException $e){
            echo "Ya esxiste esta matricula";
            return false;
        }       
    }
}

?>