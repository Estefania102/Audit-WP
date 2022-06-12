<?php
include "../controlador/Conexion.php";
session_start();
$idem=$_REQUEST['cod4'];

$sql="select estado,COUNT(*) as Cantidad FROM elementos 
      WHERE idEmpresa=$idem GROUP BY estado;";

$resultado = $con -> query($sql);

$array = array();
while ($i=$resultado->fetch_assoc()){
    $registro["cantidad"] = $i["Cantidad"];

    $array[]=$registro;
}
echo json_encode($array);
?>