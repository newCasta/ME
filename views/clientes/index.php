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
            <div class="col-sm-4">
                <h1 class="mb-5">Regsitrar cliente</h1>
                <div class="center"><?php echo $this->mensaje ?></div>
                <form action="<?php echo constant('URL') ?>registrarcliente/registrarCliente" method="post">
                    <div class="mb-3">
                        <label for="documentoid" class="form-label">Documento identidad</label>
                        <input type="text" name="documentoid" id="documentoid" required maxlength="10" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="fechaexp" class="form-label">Fecha expedicion</label>
                        <input type="date" name="fechaexp" id="fechaexp" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="fechaven" class="form-label">Fecha vencimiento</label>
                        <input type="date" name="fechaven" id="fechaven" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" name="usuario" id="usuario" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" name="correo" id="correo" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" name="telefono" id="telefono" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" name="edad" id="edad" required class="form-control">
                    </div>
                    <p>Eres un psicologo registrate <a href="<?php echo constant('URL') ?>registrarpsicologo">aqui</a></p>
                    <input type="submit" value="Registrar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php' ?>
</body>
</html>