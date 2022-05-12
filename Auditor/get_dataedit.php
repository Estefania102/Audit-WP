<?php
if(isset($_POST['edit'])){
    include 'controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idAuditor=$_SESSION["idAuditor"];  
    $id = $_POST['edit']; 
    $pers=$obj->UpdateHor($id);
    $response = " 
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='css/estilos.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='lib/sweetalert2.min.css'>

    <form role='form' method='post' name='updateempresa' id='updateempresa' action='../controlador/OperacionInsertar.php'>   
    <input type='hidden' class='form-control' name='idh' value='$id'>";
     
    // Fecha
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='dates' style='margin-top:15px;'>";?>   
            <?php
            foreach ($pers as $k=>$d){
                $var=$d[0];
        }
        $response .=    "<div id='fecha10' style='display:none'> 
                                <div class='obtener'>
                                    <p>Fecha debe ser mayor a la fecha de hoy</p>
                                </div>
                              </div>";
    $response .= "<label style='margin-left:67px'>Fecha</label>";
    $response .= "<input type='hidden' style='width:200px;' class='form-control' id='fecha1' name='event_dates'  value='$var' autocomplete='off' required>";

    $response .= "<input type='text' style='width:200px;' class='form-control' id='fecha' name='event_date' value='$var'  autocomplete='off' required>";
                

    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
   
    // Hora Inicio
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='horaini' style='margin-top: 20px;'> ";?>
            <?php
            foreach ($pers as $k=>$d){
                $var = 'showpickers("timepkr",24)';
    $response .= "<label style='margin-left:19px;'>Hora Inicio</label>";
    $response .= "<br><input id='timepkr' name='Horai' style='width: 100px;float:left;' class='form-control' value='$d[1]' required>";
            }
    $response .= "<button type='button' class='btn btn-primary' onclick='$var' style='width:40px;float:left;' ><i class='fa fa-clock-o'></i>";
            
    $response .="</div>";
    $response .= "</div>";
    $response .= "<div class='timepicker'></div>";
    $response .=" </div>
    </head>";
    
    // Hora Final
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='horafin' style='margin-top: 20px;'>";?>
            <?php
            foreach ($pers as $k=>$d){
                $var = 'showpickers("timepkr1",24)';
    $response .= "<label style='margin-left:25px;'>Hora Fin</label>";
    $response .= "<br><input id='timepkr1' name='Horaf' style='width: 100px;float:left;' class='form-control' value='$d[2]' required>";
            }
    $response .= "<button type='button' class='btn btn-primary' onclick='$var' style='width:40px;float:left;' ><i class='fa fa-clock-o'></i>";
            
    
    $response .="</div>";
    $response .= "</div>";
    $response .= "<div class='timepicker'></div>";
    $response .=" </div>";
    $response.="  <input type='hidden' name='updatehorario' value=''>
    <button style='margin-left:190px;margin-top:20px'type='submit' class='btn btn-dark' >Guardar</button>";
    
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
  
}
?>
