<?php

    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idaudit=$_SESSION["idAuditor"];  

$response = "   
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../css/estilos.css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>
    
    <form role='form' method='post' name='addcorreo' id='addcorreo' action='EnvioCorreo.php'>   
    <input type='hidden' class='form-control' name='idh' value='$idaudit'>
    <input type='hidden' class='form-control' name='registroLista' value=''>";
     
    // CORREO
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='correo' style='margin-top:30px;'>";
           
    $response .= "<label style='margin-left: 67px'>Correo</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='correo' name='correo'  autocomplete='off' required>";
    $response.="<input type='hidden' name='nuevocorreo' value=''>";
    $response .= "<button class='btn btn-success btnAgregarG' type='submit'>Nuevo</button>";       
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    
    $response.="<input type='hidden' name='addcorreo' value=''>
    <button style='margin-left:190px;margin-top:20px' class='btn btn-dark'>Guardar</button>";
    $response.="</form>";
    $response.="
    <script src='../js/Principal.js'></script>
    <script src='../lib/sweetalert2.all.js'></script>
    <script src='../lib/sweetalert2.min.js'></script>";
    echo $response;
    exit;
  

?>
