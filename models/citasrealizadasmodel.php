<?php

include_once 'models/citas.php';
include_once 'models/cliente.php';
include_once 'models/psicologo.php';

class CitasRealizadasModel extends Model{

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
    
    public function getCitasObservadas(){
        $items = [];
        $id = $_SESSION['id'];

        try{
            $query = $this->db->connect()->query("SELECT * FROM citas WHERE (idCliente = $id OR idPsicologo = $id) ORDER BY fecha DESC");
            while($row = $query->fetch()){
                $item = new Cita;
                $item->idcita = $row[0];
                $item->idcitaprogramada = $row[1];
                $item->fecha = $row[2];
                $item->duracion = $row[3];
                $item->cliente = $row[4];
                $item->psicologo = $row[5];
                $item->observacion = $row[6];

                array_push($items, $item);
            }
            return $items;

        }catch(PDOException $e){
            return [];
        }
    }
}

?>