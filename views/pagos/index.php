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
            <div class="col-sm-10 text-center">
                <h1>Pagos</h1>
                <p class="fs-4 mt-5">Para realizar los pagos haz la transacción al nuestro nequi (+57) 301 7755724 o puedes escanear nuestro codigo QR</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-10 text-center">
                <img src="<?php echo constant('URL') ?>public/img/nequi-logo.png" alt="" width="300">
                <img src="<?php echo constant('URL') ?>public/img/qr.jpg" alt="" width="230">
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>