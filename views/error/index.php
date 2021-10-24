<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant('URL') ?>public/img/icon.ico">
    <title>ME</title>
</head>
<body>
    <?php require 'views/header.php' ?>
    <div class="container d-flex justify-content-center flex-column align-items-center" style="height: 70vh;">
        <h1><?php echo $this->titulo ?></h1>
        <p><?php echo $this->mensaje ?></p>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>