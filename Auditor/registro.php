<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,maximum-scale=1.0,minimum-scale=1.0">
    <title>Audit PW</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<?php
       
        include 'controlador/Negocio.php';
        
?>

<body background="img/"> 
    
<h1 class="formh1">REGISTRO</h1>
    <form class="formre" id="envia5" name="envia5" action="controlador/OperacionInsertar.php" method="post">
 
        <div class="formulario-grupo" id="grupo-nombre">
            <label for="nombre" class="formulario-label">Nombres</label>
            <div class="formulario-grupo-input">
                <input class="campos" type="text" name="nombre" placeholder="Luis Fernando" required>
                <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">El nombre tiene que ser de 4 a 16 caracteres y solo puede contener letras</p>
        </div>

        <div class="formulario-grupo" id="grupo-apellido">
            <label for="apellido" class="formulario-label">Apellidos</label>
            <div class="formulario-grupo-input">
                <input class="campos" type="text" name="apellido" placeholder="Flores Basurto" required>
                <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">El apellido tiene que ser de 4 a 16 caracteres y solo puede contener letras</p>
        </div>

        <div class="formulario-grupo" id="grupo-direccion">
            <label for="direccion" class="formulario-label">Dirección</label>
            <div class="formulario-grupo-input">
                <input class="campos" type="text" name="direccion" placeholder="Av.Santa Rosa n 512 VMT" required>
                <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">La dirección tiene que ser de 100 caracteres y puede contener letras y números</p>
        </div>

        <div class="formulario-grupo" id="grupo-celular">
            <label for="celular" class="formulario-label">Celular</label>
            <div class="formulario-grupo-input">
                <input class="campos" type="text" name="celular" placeholder="999999999" required>
                <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">El celular tiene que ser de 9 dígitos</p>
        </div>

        <div class="formulario-grupo" id="grupo-correo">
            <label for="correo" class="formulario-label">Correo</label>
            <div class="formulario-grupo-input">
                <input class="campos" type="email" name="correo" placeholder="correo@correo.com" required>
                <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">El correo solo puede contener letras, números, puntos, guiones y guión bajo.</p>
        </div>

        <div class="formulario-grupo" id="grupo-pas">
            <label for="pas" class="formulario-label">Contraseña</label>
            <div class="formulario-grupo-input">
                <input class="campos" type="password" name="pas" placeholder="" required>
                <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">El password tiene que ser de 1 mayúscula,1 número y será de no menos de 6 caracteres</p>
        </div>

        <div class="formulario-grupo" id="grupo-button">
            <input type="hidden" name="envia5">
            <button type="submit" class="buttonre">Registrar</button>
        </div>
    </form>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/formularioAuditor.js"></script>
    <script src="principal.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src='lib/sweetalert2.all.js'></script>
    <script src='lib/sweetalert2.min.js'></script>
</html>