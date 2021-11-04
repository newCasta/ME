<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant('URL') ?>public/img/icon.ico">
</head>
<body>
    <?php require 'views/header.php' ?>

    <div class="container">
        <div class="row p-5 justify-content-center">
            <div class="col-sm-4">
                <h1 class="mb-5">Programar citas</h1>
                <div class=""><?php echo $this->mensaje ?></div>
                <form action="<?php echo constant('URL') ?>programacion/programarcitas" method="POST">
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha y hora</label>
                        <input type="datetime" name="fecha" id="fecha" placeholder="AAAA-MM-DD HH:MM:SS" required class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="cliente" class="form-label">Cliente</label>
                        <select name="cliente" id="cliente" class="form-select">
                            <?php
                            foreach($this->clientes as $row){
                                $cliente = new Cliente;
                                $cliente = $row;
                                ?>
                            <option value="<?php echo $cliente->documentoId ?>"><?php echo $cliente->nombres .' '. $cliente->apellidos ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="submit" value="Programar citas" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>