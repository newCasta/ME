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
                <h1 class="mb-5">Observacion de citas</h1>
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
                    <div class="mb-3">
                        <label for="duracion" class="form-label">Duracion</label>
                        <input type="text" name="duracion" id="duracion" placeholder="HH:MM:SS" required class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="observacion" class="form-label">Observacion</label>
                        <textarea name="observacion" id="observacion" cols="5" rows="4" class="form-control" maxlength="300" style="resize: none;"></textarea>
                    </div>
                    <input type="submit" value="Guardar observacion" class="btn btn-primary">
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>