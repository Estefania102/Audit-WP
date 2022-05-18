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
    
    <form role='form' method='post' name='addempresa' id='addempresa' action='../controlador/OperacionInsertar.php'>   
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
           
    $response .= "<label>NOMBRE</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='nombreBu' name='nombreBu'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    // NOMBRE
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='areaBu' style='margin-top:30px;'>";
           
    $response .= "<label>Área a auditar</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='areaBu' name='areaBu'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // DIRECCION
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='direccionBu' style='margin-top:30px;'>";
           
    $response .= "<label>DIRECCION</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='direccionBu' name='direccionBu'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CELULAR
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='celularBu' style='margin-top:30px;'>";
           
    $response .= "<label>CELULAR</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='celularBu' name='celularBu'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CORREO
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='correoBu' style='margin-top:30px;'>";
           
    $response .= "<label>CORREO</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='correoBu' name='correoBu'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CONTRASEÑA
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='contrasenaBu' style='margin-top:30px;'>";
           
    $response .= "<label>CONTRASEÑA</label>";
    $response .= "<input style='width:200px;' class='form-control' type='password' id='contrasenaBu' name='contrasenaBu'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    $response.="  <input type='hidden' name='addempresa' value=''>
    <button style='margin-left:190px;margin-top:20px'type='submit' class='btn btn-dark'>Guardar</button>";
    $response.="</form>";
    $response.="
    <script src='../js/Principal.js'></script>
    <script src='../lib/sweetalert2.all.js'></script>
    <script src='../lib/sweetalert2.min.js'></script>";
    echo $response;
    exit;
  

?>
