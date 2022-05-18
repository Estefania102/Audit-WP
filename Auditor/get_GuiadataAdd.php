<?php

    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idaudit=$_SESSION["idAuditor"]; 
    $id = $_POST['add'];  

$response = "   
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../css/estilos.css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>
    
    <form role='form' method='post' name='addGuiaempresa' id='addGuiaempresa' action='../controlador/OperacionInsertar.php'>   
    <input type='hidden' class='form-control' name='idG' value='$idaudit'>";
     
    // Actividad que será evaluada
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='actividadG' style='margin-top:30px;'>";
           
    $response .= "<label>Actividad que será evaluada</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='actividadG' name='actividadG'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    
    // Procedimiento de auditoría
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='procedimientoG' style='margin-top:30px;'>";
           
    $response .= "<label>Procedimiento de auditoría</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='procedimientoG' name='procedimientoG'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    // Herramientas que serán utilizadas
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='herramientaG' style='margin-top:30px;'>";
           
    $response .= "<label>Herramientas que serán utilizadas</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='herramientaG' name='herramientaG'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // Observaciones
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='observacionG' style='margin-top:30px;'>";
           
    $response .= "<label>Observaciones</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='observacionG' name='observacionG'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    $response.="  <input type='hidden' name='addGuiaempresa' value=''>
    <button style='margin-left:190px;margin-top:20px'type='submit' class='btn btn-dark'>Guardar</button>";
    $response.="</form>";
    $response.="
    <script src='../js/Principal.js'></script>
    <script src='../lib/sweetalert2.all.js'></script>
    <script src='../lib/sweetalert2.min.js'></script>";
    echo $response;
    exit;
  

?>
