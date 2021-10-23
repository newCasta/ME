<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/default.css">
</head>
<body>
    <div class="error">
        <h1><?php echo $this->titulo ?></h1>
        <p><?php echo $this->mensaje ?></p>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>