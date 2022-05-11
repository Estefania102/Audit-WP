<?php

    include 'controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idper=$_SESSION["idPersonal"];  
//     $id = $_POST['edit']; 
//     $pers=$obj->UpdateHor($id);
$var = 'showpickers("timepkr",24)';
$var1 = 'showpickers("timepkr1",24)'; 

$response = " 
    
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    
    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <script type='text/javascript' src='lib/bootstrap-datepicker.js'></script>
	<link rel='stylesheet' type='text/css' href='lib/bootstrap-datepicker.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='lib/sweetalert2.min.css'>
    

    <form role='form' method='post' name='addhorario' id='addhorario' action='OperacionInsertar.php'>   
    <input type='hidden' class='form-control' name='idh' value='$idper'>";
     
    // Fecha
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='dates' style='margin-top:30px;'>";
           
    $response .= "<label>Fecha</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='fecha' name='event_date'  autocomplete='off'>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    // Hora Inicio

    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='horaini' style='margin-top: 50px;'> ";
            
    $response .= "<label>Hora Inicio</label>";
    $response .= "<br><input id='timepkr' name='Horai' style='width: 100px;float:left;' class='form-control'  >";
            
    $response .= "<button type='button' class='btn btn-primary' onclick='$var' style='width:40px;float:left;' ><i class='fa fa-clock-o'></i>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .= "<div class='timepicker'></div>";
    $response .=" </div>";


    // $response .= "<div class='form-group'>";
    // $response .= "<div class='container'>";
    // $response .= "<div class='horaini' style='margin-top: 50px;'>";
            
                
    // $response .= "<label>Hora Inicio</label>";
    // $response .= "<br><input id='timepkr' name='Horai' style='width: 100px;float:left;' class='form-control'  ><button type='button' class='btn btn-primary' onclick='$var' style='width:40px;float:left;' ><i class='fa fa-clock-o'></i></button>
    // <div class='timepicker'></div>
    // </div>
    // </div>
    // </div>
    
    // ";
    
    // Hora Final
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='horafin' style='margin-top: 50px;'>";
           
                
    $response .= "<label>Hora Final</label>";
    $response .= "<br><div><input id='timepkr1' name='Horaf' style='width: 100px;float:left;' class='form-control'  >";
            
    $response .= "<button type='button' class='btn btn-primary' onclick='$var1' style='width:40px;float:left;' ><i class='fa fa-clock-o'></i></button></div>";
            
    
    $response .="</div>";
    $response .= "</div>";
    $response .= "<div class='timepicker'></div>";
    $response .=" </div>";
    $response.="  <input type='hidden' name='addhorario' value=''>
    <button style='margin-left:45%'type='submit' class='btn btn-dark' >Guardar</button>";
    
    $response.="</form>";
    $response.="<script>
    $(function() {
    
    $('.dates #fecha').datepicker({
        'format': 'yyyy-mm-dd',
        'autoclose': true
    });
    });
    </script>
    <script src='principal.js'></script>
    <script src='lib/sweetalert2.all.js'></script>
    <script src='lib/sweetalert2.min.js'></script>

    ";
    echo $response;
    exit;
  

?>
