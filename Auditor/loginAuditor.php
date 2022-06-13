<!DOCTYPE html>
<html lang="en">
<?php
        include "../Templates/Head.php";
        include '../controlador/Negocio.php';
        
?>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
<link rel='stylesheet' href='../lib/sweetalert2.min.css'>

        <form class="formloaud" id="envialoaud" name="envialoaud" action="../controlador/OperacionInsertar.php" method="post">
        <h1>Login Auditor</h1>
        <div class="formulario-grupo" id="grupo-correo" style="margin-top: -10px">
            <label for="correo" class="formulario-label">Correo</label>
            <div class="formulario-grupo-input">
            <input class= "campos" type="email" name="email" id="email" placeholder="correo@correo.com">
            <i class="formulario-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario-input-error">Correo inválido</p>
        </div>

        <div class="formulario-grupo" id="grupo-pas">
            <label for="correo" class="formulario-label">Contraseña</label>
            <div class="formulario-grupo-input">
            <input class= "campos" type="password" name="pas">
            <i class="formulario-validacion-estado fas fa-times-circle"></i>        
            </div> 
            <p class="formulario-input-error">Contraseña inválida</p>
        </div> 
        <div class="formulario-grupo">
            <input type="hidden" name="envialoaud">
            <button type="submit" class="button">INGRESAR</button>
            
            <p style="text-align: center;"><a href="../Empresa/LoginEmpresa.php" style="text-decoration: none;color: #424242;">Login Empresa</a></p>
            
            <p style="text-align: center;"><a href="RegistroAuditor.php" style="text-decoration: none;color: #424242;">Registrarse</a></p>
            </div>
        </form>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <script src="../js/LoginAuditor.js"></script>
    <script type="text/javascript" src="../js/Principal.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src='../lib/sweetalert2.all.js'></script>
    <script src='../lib/sweetalert2.min.js'></script>
       
</html>