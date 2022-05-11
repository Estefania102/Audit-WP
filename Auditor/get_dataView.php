<?php
if(isset($_POST['view'])){
    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idper=$_SESSION["idPersonal"];  
    $id = $_POST['view']; 
    $pers=$obj->VerRes($idper,$id);
    $response = " 
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='css/estilos.css'>
    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='lib/sweetalert2.min.css'>

    <form role='form' method='post' name='verreserva' id='verreserva' action='OperacionInsertar.php'>   
    <input type='hidden' class='form-control' name='idh' value='$id'>";
     
    // Nombre del servicio
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='nombreserv' style='margin-top:10px;'>";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left:42px;'>Nombre del servicio</label>";
    $response .= "<input type='text' style='width:200px;text-align:center;margin-left:30px;' class='form-control' id='nomserv' name='nomserv' value='$d[0]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";

    // Fecha
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='Fecha'>";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left:100px;'>Fecha</label>";
    $response .= "<input type='text' style='width:200px;text-align:center;margin-left:30px;' class='form-control' id='fecha' name='fecha' value='$d[1]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";
   
    // Hora 
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='hora' >";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left: 107px;'>Hora</label>";
    $response .= "<input type='text' style='width:200px;text-align:center;margin-left:30px;' class='form-control' id='Hora' name='Hora' value='$d[2]-$d[3]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";

    // Nombre del cliente
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='nombre' >";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left: 45px;'>Nombre del cliente</label>";
    $response .= "<input type='text' style='width:200px;text-align:center;margin-left:30px;' class='form-control' id='nomcliente' name='nomcliente' value='$d[4] $d[5]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";

    // Direccion
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='direccion' >";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left: 134px;'>Direccion</label>";
    $response .= "<input type='text' style='width:300px;text-align:center;margin-left:30px;' class='form-control' id='direcliente' name='direcliente' value='$d[6]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";

    // Celular
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='direccion' >";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left: 99px;'>Celular</label>";
    $response .= "<input type='text' style='width:200px;text-align:center;margin-left:30px;' class='form-control' id='celcelular' name='celcliente' value='$d[7]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";


    // Correo electrónico
    $response .= "<div class='form-group'>";
    $response .= "<div class='container'>";
    $response .= "<div class='correo' >";?>
            <?php
            foreach ($pers as $k=>$d){
    $response .= "<label style='margin-left: 71px;'>Correo electrónico</label>";
    $response .= "<input type='text' style='width:250px;text-align:center;margin-left:30px;' class='form-control' id='cocliente' name='cocliente' value='$d[8]' autocomplete='off' readonly>";
            }
    $response .="</div>";
    $response .="</div>";
    $response .="</div>";
 
    $response.="</form>";
    
    $response.="
    <script src='principal.js'></script>
    <script src='lib/sweetalert2.all.js'></script>
    <script src='lib/sweetalert2.min.js'></script>

    ";
    echo $response;
    exit;
  
}
?>
