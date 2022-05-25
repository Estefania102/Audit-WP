<?php
if(isset($_POST['edit'])){
    include '../controlador/Negocio.php';
    $obj=new Negocio();
    session_start();
    $idAuditor=$_SESSION["idAuditor"];  
    $id = $_POST['edit']; 
    $emp=$obj->UpdateEmpresa($id);
    $response = " 
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../css/estilos.css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../lib/sweetalert2.min.css'>

    <form role='form' method='post' name='updateempresa' id='updateempresa' action='../controlador/OperacionListaInsertar.php'>   
    <input type='hidden' class='form-control' name='idE' value='$id'>
    <input type='hidden' class='form-control' name='registroLista' value=''>";
     
    // NOMBRE
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='nombreBu' style='margin-top:15px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[0];
        }       
    $response .= "<label style='margin-left:67px'>Nombre</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='nombreBu' name='nombreBu'  value='$var' autocomplete='off' required>";
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";
    
    // DIRECCION
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='direccionBu' style='margin-top:15px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[1];
        }       
    $response .= "<label style='margin-left:60px'>Direccion</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='direccionBu' name='direccionBu'  value='$var' autocomplete='off' required>";
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    // CELULAR
    $response .= "<div class='form-group' style='margin-left: 25%'>";
    $response .= "<div class='container'>";
    $response .= "<div class='celularBu' style='margin-top:15px;'>";?>   
            <?php
            foreach ($emp as $k=>$d){
                $var=$d[2];
        }       
    $response .= "<label style='margin-left:70px'>Celular</label>";
    $response .= "<input type='text' style='width:200px;' class='form-control' id='celularBu' name='celularBu'  value='$var' autocomplete='off' required>";
    $response .="</div>";
    $response .= "</div>";
    $response .=" </div>";

    $response.="  <input type='hidden' name='updateempresa' value=''>
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
