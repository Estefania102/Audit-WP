<?php

    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idaudit=$_SESSION["idAuditor"];  
    
$response = "   
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../css/estilos.css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script type='text/javascript' src='../lib/bootstrap-datepicker.js'></script>
    <link rel='stylesheet' type='text/css' href='../lib/bootstrap-datepicker.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>
    
    <form role='form' method='post' name='addelementos' id='addelementos' action='../controlador/OperacionInsertar.php'>   
    <input type='hidden' class='form-control' name='idEle' value='$idaudit'>
    
    <script>
    $(function() {
    $('.dates #calendario').datepicker({
    'format': 'yyyy-mm-dd',
    'autoclose': true
    });
    });
    </script>";

    // Nombre
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='nombreEle' style='margin-top:30px;'>";
           
    $response .= "<label>Nombre de elemento</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='nombreEle' name='nombreEle'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    
    // Descripción
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='descEle' style='margin-top:30px;'>";
           
    $response .= "<label>Descripción del elemento</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='descEle' name='descEle'  autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    // Cantidad
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='cantEle' style='margin-top:30px;'>";
           
    $response .= "<label>Cantidad</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='cantEle' name='cantEle' autocomplete='off' required>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // F.Revisión
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='dates' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha de revisión</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='calendario' name='calendario'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // Estado
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='camposr' style='margin-top:30px;'>";
    $response .= "<script function changeFunc(id){
        if(id =='custModalElementos') {
          $('#custModalElementos').modal('show');
        }}></script>";

    $response .= "<label for='categorias'>Elija estado</label>                           
    <select name='categoria' id='categoria' class='camposr'>
    <option value=''>Seleccione</option>";?>  
    <?php
    $vec2=$obj->ListarEstado();
    foreach ($vec2 as $k=>$d){                                   
    echo '<option value='.$d[0].'>'.$d[1].'</option>';
    }
    $response .="</select>";
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";


    // Observación
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='obserEle' style='margin-top:30px;'>";
           
    $response .= "<label>Observación</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='obserEle' name='obserEle' autocomplete='off'>";
            
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