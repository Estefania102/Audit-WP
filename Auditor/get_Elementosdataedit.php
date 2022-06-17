<?php
if(isset($_POST['editElemento'])){
    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idAuditor=$_SESSION["idAuditor"];  
    $id = $_POST['editElemento']; 
    $emp=$obj->UpdateElemento($id);
    $response = " 
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../css/estilos.css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script type='text/javascript' src='../lib/bootstrap-datepicker.js'></script>
    <link rel='stylesheet' type='text/css' href='../lib/bootstrap-datepicker.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>

    <form role='form' method='post' name='updateElemento' id='updateElemento' action='../controlador/OperacionElementoInsertar.php'>   
    <input type='hidden' class='form-control' name='idEle' value='$id'>
    <input type='hidden' class='form-control' name='registroElemento' value=''>
     
    <script>
    $(function() {
    $('.dates #calendario').datepicker({
    'format': 'yyyy-mm-dd',
    'autoclose': true
    });
    });
    </script>";

    // Nombre
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='nombreEle' style='margin-top:30px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[1];
        }       
    $response .= "<label style='margin-left: 24px'>Nombre de elemento</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='nombreEle' name='nombreEle' value='$var'  autocomplete='off'>";
    
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    
    // Descripción
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='descEle' style='margin-top:30px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[2];
        }       
    $response .= "<label style='margin-left: 10px'>Descripción del elemento</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='descEle' name='descEle' value='$var' autocomplete='off' required>";
     
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // Cantidad
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='cantEle' style='margin-top:30px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[3];
        }       
    $response .= "<label style='margin-left: 66px'>Cantidad</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='cantEle' name='cantEle' value='$var' autocomplete='off' required>";
     
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // F.Revisión
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='dates' style='margin-top:30px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[4];
        }       
    $response .= "<label style='margin-left: 38.5px'>Fecha de revisión</label>";
    $response .= "<input type='hidden' style='width:200px;' class='form-control' id='fecha1' name='fechahoy'  value='$var' autocomplete='off' required>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='calendario' name='calendario' value='$var' autocomplete='off' required>";
      
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // Estado
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='camposr' style='margin-top:30px;'>";    
    $response .= "<label for='estado' style='margin-left: 9.5px'>Elija estado</label>                           
    <select name='estado' id='estado' class='camposr' required>";?>  
    <?php
    $vec2=$obj->ListarEstado($id);
    foreach ($vec2 as $k=>$d){                                   
    echo '<option value='.$d[0].'></option>';
    }
    $response .=" <option value=''>Seleccione</option>
    <option value='1'>Bueno</option>
    <option value='2'>Regular</option>
    <option value='3'>Malo</option></select>";
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // Observación
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='obserEle' style='margin-top:30px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[6];
        }       
    $response .= "<label style='margin-left: 53px'>Observación</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='obserEle' name='obserEle' value='$var' autocomplete='off'>";
      
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    $response.="  <input type='hidden' name='updateElemento' value=''>
    <button style='margin-left:190px;margin-top:20px'type='submit' class='btn btn-dark'>Guardar</button>";
    
    $response.="</form>";
    $response.="
    <script src='../js/Principal.js'></script>
    <script src='../lib/sweetalert2.all.js'></script>
    <script src='../lib/sweetalert2.min.js'></script>";
    echo $response;
    exit;
  
}
?>
