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
        <h1 class="center">observacion de citas</h1>
        <div class="center"><?php echo $this->mensaje ?></div>
        <form action="<?php echo constant('URL') ?>observacion/observacioncita" method="POST">
            <?php
            foreach($this->cita as $row){
                $cita = new CitaAgregada;
                $cita = $row;
            ?>
           
            <input type="hidden" name="idcita" value="<?php echo $cita->idcitas ?>">
            <input type="hidden" name="cliente" value="<?php echo $cita->cliente ?>">
            <input type="hidden" name="psicologo" value="<?php echo $cita->psicologo ?>">
            <p>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion" placeholder="h:m:s" required>
            </p>
            <p>
                <label for="observacion">Observacion</label>
                <textarea name="observacion" id="observacion" cols="30" rows="10"></textarea>
            </p>
            <p>
                <input type="submit" value="Guardar observacion">
            </p> 
            <?php
            }
            ?>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>