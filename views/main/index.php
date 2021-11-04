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
            <div class="col-sm-12 text-center">
                <h1>¡Hola! ¡Nosotros somos ME!</h1>
            </div>
        </div>
        <div class="row px-5 justify-content-center">
            <div class="col-sm-12 text-center">
                <p class="fs-4 mt-4"> Somos una empresa dedicada a la ayuda psicológica.</p>
            </div>
        </div>
        <div class="row p-5 my-5 justify-content-center align-items-center d-flex">
            <div class="col-sm-6 text-end">
                <p class="fs-4">Nuestro objetivo es brindar un servicio de calidad enfocándonos en la accesibilidad y tu economía ya que todos merecemos que alguien se preocupe por nuestra salud mental además, de ser accesibles 24/7.</p>
            </div>
            <div class="col-sm-6 text-center">
                <img src="<?php echo constant('URL') ?>public/img/icon.png" alt="" width="160">
            </div>
        </div>
        <div class="row p-5 my-5 justify-content-center align-items-center d-flex">
            <div class="col-sm-6 text-center">
                <img src="<?php echo constant('URL') ?>public/img/logoME.png" alt="" width="160">
            </div>
            <div class="col-sm-6 text-start">
                <p class="fs-4">Buscamos ayudar a todo aquel que lo necesite. Por eso esta empresa se trata de todos nosotros, se trata de ti, somos me.</p>  
            </div>
        </div>
        <div class="row p-5 my-5 justify-content-center align-items-center d-flex">
            <div class="col-sm-6 text-end">
                <p class="fs-4">Por medio del uso de la aplicacion de Discord se haran las llamadas o videollamadas para llevar a cabo las citas que los psicologos les ofreceran a los clientes.</p>  
            </div>
            <div class="col-sm-6 text-center">
                <img src="<?php echo constant('URL') ?>public/img/img.svg" alt="" width="400">
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>