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
        <h1 class="center"><?php
        echo $_SESSION['user'] .' tipo: '. $_SESSION['rol'];
        ?></h1>
        <?php
        foreach($this->citasobservadas as $row){
            $citas = new Cita;
            $citas = $row;
        ?>
        <div class="center">
            <p><?php echo $citas->idcitaprogramada; ?></p>
            <p><?php echo $citas->duracion; ?></p>
            <p><?php 
                #echo $citas->cliente;
                foreach($this->clientes as $rowc){
                    $cliente = new Cliente;
                    $cliente = $rowc;
                    if($cliente->documentoId == $citas->cliente){
                        echo $cliente->nombres.' '.$cliente->apellidos;
                    }
                }
                ?></p>
            <p><?php 
                #echo $citas->cliente;
                foreach($this->psicologos as $rowp){
                    $psicologo = new Psicologo;
                    $psicologo = $rowp;
                    if($psicologo->documentoId == $citas->psicologo){
                        echo $psicologo->nombres.' '.$psicologo->apellidos;
                    }
                }
                ?></p>
            <p><?php $fecha = explode(' ',$citas->fecha); echo $fecha[0] ?></p>
            <p><?php echo $citas->observacion ?></p>
        </div>
        <?php } ?>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>