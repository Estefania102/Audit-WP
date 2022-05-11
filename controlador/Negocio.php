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
    function registroEmpresa($nom,$dire,$cel,$correo,$contrasena){
        $sql="insert into empresa (nombre, direccion,celular,correo,contrasena) 
        values('$nom','$dire','$cel','$correo','$contrasena')";
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
    



}
?>