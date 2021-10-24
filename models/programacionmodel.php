<?php

include_once 'models/cliente.php';

class ProgramacionModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    
    public function getCliente(){
        $items = [];

        try{
            $query = $this->db->connect()->query('SELECT * FROM clientes');
            while($row = $query->fetch()){
                $item = new Cliente;
                $item->documentoId = $row[0];
                $item->nombres = $row[1];
                $item->apellidos = $row[2];
                $item->telefono = $row[3];
                $item->edad = $row[4];

                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return [];
        }
    }

    public function agregarCita($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO programacion_citas(fechaRealizacion, idCliente, idPsicologo, observada) VALUES(:fecha, :cliente, :psicologo, :observada)');
            $query->execute(['fecha' => $datos['fecha'], 'cliente' => $datos['cliente'], 'psicologo' => $datos['psicologo'], 'observada' => 'no']);
            return true;
        }catch(PDOException $e){
            #echo "Ya esxiste este Documento";
            return false;
        }       
    }
}

?>