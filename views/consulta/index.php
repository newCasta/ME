<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant('URL') ?>public/img/icon.ico">
</head>
<body class="min-vh-100">
    <?php require 'views/header.php' ?>

    <div class="container h-100">
        <div class="row p-5 justify-content-center">
            <div class="col-sm-6  text-center">
                <h1>Que es ME?</h1>
            </div>
        </div>
        <div class="row px-5 justify-content-center align-items-center d-flex">
            <div class="col-sm-6 text-end">
                <p class="fs-4">Es un proyecto el cual busca atender todo lo relacionado con tu salud mental, ser tu mano amiga en todo momento que nesesites de nosotros y tambien quiere fomentar la importancia de la salud mental.</p>
            </div>
            <div class="col-sm-6 text-center">
                <img src="<?php echo constant('URL') ?>public/img/ME.png" alt="" width="400">
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>