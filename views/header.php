<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ME</title>
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/default.css">
</head>
<body>
    <div id="header">
        <ul>
            <li><a href="<?php echo constant('URL') ?>main">Inicio</a></li>
            <li><a href="<?php echo constant('URL') ?>consulta">Sobre nosotros</a></li>
            <li><a href="<?php echo constant('URL') ?>ayuda">Contactos</a></li>
            <?php
            if(isset($_SESSION['rol'])){
                if($_SESSION['rol'] == 'cliente'){
                    ?>
            <li><a href="<?php echo constant('URL') ?>citas">Citas</a></li>
                    <?php
                }elseif($_SESSION['rol'] == 'psicologo'){
                    ?>
            <li><a href="<?php echo constant('URL') ?>programacion">Programar citas</a></li>
                    <?php
                }
                if($_SESSION['rol'] != '' || $_SESSION['rol'] == 'cliente' || $_SESSION['rol'] == 'psicologo' || $_SESSION['rol'] == 'admin'){
                    ?>
            <li><a href="<?php echo constant('URL') ?>main/logout">Cerrar sesion</a></li>
                    <?php
                }
            }else{
                    ?>
            <li><a href="<?php echo constant('URL') ?>registrarcliente">Registrarse</a></li>
            <li><a href="<?php echo constant('URL') ?>login">Login</a></li>
                    
            <?php
            }
            ?>
            
        </ul>
    </div>
</body>
</html>