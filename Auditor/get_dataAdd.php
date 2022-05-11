<?php

    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idaudit=$_SESSION["idAuditor"];  

$response = "   
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>
    
    <form role='form' method='post' name='addempresa' id='addempresa' action='OperacionInsertar.php'>   
    <input type='hidden' class='form-control' name='idh' value='$idaudit'>";
     
    // LOGO
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='logo' style='margin-top:30px;'>";
           
    $response .= "<label>Logo</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='logo' name='logo'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    
    // NOMBRE
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='nombreBu' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='nombreBu' name='nombreBu'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    // DIRECCION
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='direccionBu' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='direccionBu' name='direccionBu'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CELULAR
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='celularBu' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='celularBu' name='celularBu'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CORREO
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='correoBu' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='correoBu' name='correoBu'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CONTRASEÑA
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='contrasenaBu' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='contrasenaBu' name='contrasenaBu'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    $response.="<button style='margin-left:45%'type='submit' class='btn btn-dark' >Guardar</button>";
    
    $response.="</form>";
    echo $response;
    exit;
  

?>
