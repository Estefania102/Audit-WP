<?php

    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idem=$_GET["add"];  
    
    $response = "   
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../css/estilos.css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>
    
    <form role='form' method='post' name='addconclusion' id='addconclusion' action='../controlador/OperacionConclusionInsertar.php'>   
    <input type='hidden' class='form-control' name='idEmp' value='$idem'>
    <input type='hidden' class='form-control' name='registroConclusion' value=''>";
  
    // Conclusiones
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='conclusion' style='margin-top:30px;'>";
           
    $response .= "<label>Conclusión</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='conclusion' name='conclusion'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    
    

    $response.="  <input type='hidden' name='addconclusion' value=''>
    <button style='margin-left:190px;margin-top:20px'type='submit' class='btn btn-dark'>Guardar</button>";
    $response.="</form>";
    $response.="
    <script src='../js/Principal.js'></script>
    <script src='../lib/sweetalert2.all.js'></script>
    <script src='../lib/sweetalert2.min.js'></script>";
    echo $response;
    exit;
  
?>
