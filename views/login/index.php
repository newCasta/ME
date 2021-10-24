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
            <div class="col-sm-3">
                <h1 class="mb-5">Ingresar</h1>
                <?php
                if($this->mensaje != ""){
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Bien!</strong> <?php echo $this->error ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                }
                ?>
                <?php
                if($this->error != ""){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> <?php echo $this->error ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                }
                ?>
                <form action="<?php echo constant('URL') ?>login/ingresar" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <input type="text" name="user" id="user" required class="form-control">
                    </div>
                    <div class="mb-5">
                        <label for="pass" class="form-label">Password</label class="form-label">
                        <input type="password" name="pass" id="pass" required class="form-control">
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>