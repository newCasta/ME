<?php

include_once 'models/citasagregadas.php';
include_once 'models/cliente.php';
include_once 'models/psicologo.php';

class CitasModel extends Model{

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

    public function getPsicologo(){
        $items = [];

        try{
            $query = $this->db->connect()->query('SELECT * FROM psicologos');
            while($row = $query->fetch()){
                $item = new Psicologo;
                $item->documentoId = $row[0];
                $item->nombres = $row[1];
                $item->apellidos = $row[2];
                $item->telefono = $row[3];
                $item->hojavida = $row[4];

                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return [];
        }
    }
    
    public function getCitasAgregadas(){
        $items = [];
        $id = $_SESSION['id'];

        try{
            $query = $this->db->connect()->query("SELECT * FROM programacion_citas WHERE observada = 'no' AND (idCliente = $id OR idPsicologo = $id) ORDER BY fechaRealizacion");
            while($row = $query->fetch()){
                $item = new CitaAgregada;
                $item->idcitas = $row[0];
                $item->fechexp = $row[1];
                $item->fechrea = $row[2];
                $item->cliente = $row[3];
                $item->psicologo = $row[4];
                $item->observada = $row[5];

                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return [];
        }
    }
}

?>