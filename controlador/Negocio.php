<?php
class Negocio{
    private $cn=null;
    function __construct() {
        if($this->cn==null){
            $this->cn=  mysqli_connect("localhost", "root", "", "bdauditwp");
        }
        return $this->cn;
    }

    /* REGISTRO Auditor*/     
    function registroAudit($nom,$ape,$dire,$correo,$contrasena){
        $sql="insert into auditor (nombres, apellidos, direccion,correo,contrasena) 
        values('$nom','$ape','$dire','$correo','$contrasena')";
        $res=mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
           if($res)
           return "ok";
           else
           return "Error";
    }

    /* LOGIN Auditor*/ 
    function loginAuditor($ema,$pas){
        $sql="select * from auditor where correo='$ema' and contrasena='$pas'";
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        if(mysqli_num_rows($res)>0){
           $f=  mysqli_fetch_array($res);
           $resultado = array(
            $f[0],
            $f[1],
            $f[2],
            $f[5]
           );
        }else {
            $resultado="error";
        }
        return $resultado;
    }


    /* REGISTRO empresa*/ 
    function registroEmpresa($nom,$dire,$cel,$correo,$contrasena,$area){
        $sql="insert into empresa (nombre, direccion,celular,correo,contrasena,area) 
        values('$nom','$dire','$cel','$correo','$contrasena','$area')";
        $res=mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
           if($res)
           return "ok";
           else
           return "Error";
    }

    /* LOGIN Auditor*/ 
    function loginEmpresa($ema,$pas){
        $sql="select * from empresa where correo='$ema' and contrasena='$pas'";
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        if(mysqli_num_rows($res)>0){
           $f=  mysqli_fetch_array($res);
           $resultado = array(
            $f[0],
            $f[1],
            $f[4]
           );
        }else {
            $resultado="error";
        }
        return $resultado;
    }
    
    //MENU PRINCIPAL AUDITOR
    //Agregar
    function Insertarbu($idaudit){      
        $sql="select e.nombre,e.idEmpresa FROM empresa e INNER JOIN auditor a ON e.idAuditor=a.idAuditor 
        WHERE a.idAuditor='$idaudit'";
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }
    
    //Modificar
    function UpdateEmpresa($upbu){      
        $sql="select `nombre`, `direccion`, `celular` FROM `empresa` WHERE idEmpresa=".$upbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //Ingreso Empresa
    //Modificar
    function NombreEmpresa($upbu){      
        $sql="select `nombre` FROM `empresa` WHERE idEmpresa=".$upbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //GUIA DE EVALUACIÓN 
    /* REGISTRO GUIA DE EVALUACIÓN*/ 
    function registroguia($act,$prod,$herra,$obser,$idemp){
        $sql="INSERT INTO `guiaevaluacion`(`actividad`, `procedimiento`, `herramientas`, `observaciones`, `idEmpresa`) 
        VALUES ('$act','$prod','$herra', '$obser') WHERE idEmpresa=".$idemp;
        $res=mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
           if($res)
           return "ok";
           else
           return "Error";
    }

}
?>

