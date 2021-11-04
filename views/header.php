<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?php echo constant('URL') ?>public/img/icon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>ME</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark p-0 flex-column" style="background-color: #174982;">
            <div class="d-flex flex-row align-items-center">
                <img src="<?php echo constant('URL') ?>public/img/ME.png" alt="" width="100">
                <?php
                if(isset($_SESSION['rol'])){
                ?>
                <p class="fs-2 text-light m-0">| <?php echo $_SESSION['user'] ?></p>
                <?php
                }
                ?>
            </div>
            <div class="d-flex flex-row align-items-center">
                <?php
                if(isset($_SESSION['rol'])){
                ?>
                <p class="fs-5 text-white-50 text-capitalize"><?php echo $_SESSION['rol'] ?></p>
                <?php
                }
                ?>
            </div>
            <button class="navbar-toggler mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav pb-3">
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>main">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>consulta">Sobre nosotros</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>ayuda">Contactanos</a></li>
                    <?php
                if(isset($_SESSION['rol'])){
                    if($_SESSION['rol'] == 'cliente'){
                        ?>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>citas">Citas</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>pagos">Pagos</a></li>
                    <?php
                    }elseif($_SESSION['rol'] == 'psicologo'){
                        ?>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>citas">Citas</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>programacion">Programar citas</a></li>
                    <?php
                    }
                    if($_SESSION['rol'] != '' || $_SESSION['rol'] == 'cliente' || $_SESSION['rol'] == 'psicologo' || $_SESSION['rol'] == 'admin'){
                        ?>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>main/logout">Cerrar sesion</a></li>
                    <?php
                    }
                }else{
                    ?>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>registrarcliente">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link mx-3" href="<?php echo constant('URL') ?>login">Login</a></li>
                    
                    <?php
                }
                ?>
                
                </ul>
            </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>