<?php

include_once 'models/citasagregadas.php';
include_once 'models/cliente.php';
include_once 'models/psicologo.php';

class ObservacionModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    
    public function getCita(){
        $items = [];
        if(isset($_GET['idcita'])){
            $id = $_GET['idcita'];   
        }else{
            header('location: '. constant('URL'));
        }
        

        try{
            $query = $this->db->connect()->query("SELECT * FROM programacion_citas WHERE idProgramacionC = $id AND observada = 'no'");
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

    public function observacionCita($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO citas(idCitaProgramada, duracion, idCliente, idPsicologo, observacion) VALUES(:idCita, :duracion, :idCliente, :idPsicologo, :observacion)');
            $query->execute(['idCita' => $datos['idCita'], 'duracion' => $datos['duracion'], 'idCliente' => $datos['cliente'], 'idPsicologo' => $datos['psicologo'], 'observacion' => $datos['observacion']]);
            $actualizar = $this->db->connect()->prepare("UPDATE programacion_citas SET observada = 'si' WHERE programacion_citas.idProgramacionC = :idCita");
            $actualizar->execute(['idCita' => $datos['idCita']]);
            return true;
        }catch(PDOException $e){
            #echo "Ya esxiste este Documento";
            return false;
        }       
    }
}

?>