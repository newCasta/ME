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
        <h1 class="center">Ingresar</h1>
        <form action="<?php echo constant('URL') ?>login/ingresar" method="post" enctype="multipart/form-data">
            <p>
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" required>
            </p>
            <p>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </p>
            <p>
                <input type="submit" value="Ingresar">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>