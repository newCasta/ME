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
        <h1 class="center">Regsitrar usuario</h1>
        <form action="<?php echo constant('URL') ?>registrarcliente/registrarCliente" method="post">
            <p>
                <label for="documentoid">Documento identidad</label>
                <input type="text" name="documentoid" id="documentoid" required>
            </p>
            <p>
                <label for="fechaexp">Fecha expedicion</label>
                <input type="date" name="fechaexp" id="fechaexp" required>
            </p>
            <p>
                <label for="fechaven">Fecha vencimiento</label>
                <input type="date" name="fechaven" id="fechaven" required>
            </p>
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" required>
            </p>
            <p>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </p>
            <p>
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" required>
            </p>
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" required>
            </p>
            <p>
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" required>
            </p>
            <p>
                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad" required>
            </p>
            <p>
                <a href="<?php echo constant('URL') ?>registrarpsicologo">Eres un psicologo registrate aqui</a>
            </p>
            <p>
                <input type="submit" value="Registrar">
            </p>
        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>