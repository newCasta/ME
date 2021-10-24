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
        <h1 class="center">agregar citas</h1>
        <div class="center"><?php echo $this->mensaje ?></div>
        <form action="<?php echo constant('URL') ?>programacion/programarcitas" method="POST">
            <p>
                <label for="fecha">Fecha y hora</label>
                <input type="datetime" name="fecha" id="fecha" placeholder="aaaa-mm-dd h:m:s" required>
            </p>
            <p>
                <label for="cliente">Cliente</label>
                <select name="cliente" id="cliente">
                    <?php
                    foreach($this->clientes as $row){
                        $cliente = new Cliente;
                        $cliente = $row;
                    ?>
                    <option value="<?php echo $cliente->documentoId ?>"><?php echo $cliente->nombres .' '. $cliente->apellidos ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Programar citas">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>