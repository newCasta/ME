<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo constant('URL') ?>public/img/icon.ico">
</head>
<body>
    <?php require 'views/header.php' ?>

    <div class="container">
        <div class="row p-5">
            <div class="col-sm-12">
                <h1>Citas con observacion</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                    <?php
                    foreach($this->citasobservadas as $row){
                        $citas = new Cita;
                        $citas = $row;
                        ?>
                <div class="d-flex justify-content-around shadow p-4 mb-5 bg-body rounded-3 text-center align-items-center border">
                    <p>Duracion: <br><?php echo $citas->duracion; ?></p>
                    <p><?php 
                        #echo $citas->cliente;
                        foreach($this->clientes as $rowc){
                            $cliente = new Cliente;
                            $cliente = $rowc;
                            if($cliente->documentoId == $citas->cliente){
                                echo 'Cliente: <br>'.$cliente->nombres.' '.$cliente->apellidos;
                            }
                        }
                        ?></p>
                    <p><?php 
                        #echo $citas->cliente;
                        foreach($this->psicologos as $rowp){
                            $psicologo = new Psicologo;
                            $psicologo = $rowp;
                            if($psicologo->documentoId == $citas->psicologo){
                                echo 'Psicologo: <br>'.$psicologo->nombres.' '.$psicologo->apellidos;
                            }
                        }
                        ?></p>
                    <p>Fecha expedicion: <br><?php $fecha = explode(' ',$citas->fecha); echo $fecha[0] ?></p>
                    <p>Observacion: <br><?php echo $citas->observacion ?></p>
                </div>
                    <?php } ?>
            </div>
        </div>
    </div>
    
    <?php require 'views/footer.php' ?>
</body>
</html>