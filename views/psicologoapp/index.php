<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php' ?>

    <div id="main">
        <h1 class="center">Citas porgramadas</h1>
        <p>Unete al discord para dar las citas <a href="https://discord.gg/xnanWRrR4C">aqui</a></p>
        <?php
        foreach($this->citasagregadas as $row){
            $citas = new CitaAgregada;
            $citas = $row;
            $fecha = explode(' ', $citas->fechrea);
        ?>
        <div class="center">
            <p>Id cita: <?php echo $citas->idcitas; ?></p>
            <p>Fecha expedicion: <?php echo $citas->fechexp; ?></p>
            <p>Fecha realizacion: <?php echo $fecha[0] ?></p>
            <p>Hora: <?php echo $fecha[1] ?></p>
            <p><?php 
                #echo $citas->cliente;
                foreach($this->clientes as $rowc){
                    $cliente = new Cliente;
                    $cliente = $rowc;
                    if($cliente->documentoId == $citas->cliente){
                        echo 'Cliente: '.$cliente->nombres.' '.$cliente->apellidos;
                    }
                }
                ?></p>
            <p><?php 
                #echo $citas->cliente;
                foreach($this->psicologos as $rowp){
                    $psicologo = new Psicologo;
                    $psicologo = $rowp;
                    if($psicologo->documentoId == $citas->psicologo){
                        echo 'Psicologo: '.$psicologo->nombres.' '.$psicologo->apellidos;
                    }
                }
                ?></p>
            <p><a href="<?php echo constant('URL').'observacion?idcita='.$citas->idcitas; ?>">Observacion</a></p>
        </div>
        <?php } ?>
        <p>Mirar citas observadas <a href="<?php echo constant('URL')?>citasrealizadas">aqui</a></p>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>