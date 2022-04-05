<?php
class Negocio{
    private $cn=null;
    function __construct() {
        if($this->cn==null){
            $this->cn=  mysqli_connect("localhost", "root", "", "bdauditwp");
        }
        return $this->cn;
    }

    /* REGISTRO auditor*/ 
    function registroAudit($nom,$ape,$dire,$cel,$correo,$pas){
        $sql="insert into auditor (nombres, apellidos, direccion,correo,contrasena) 
        values('$nom','$ape','$dire','$correo','$pas')";
        $res=mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
           if($res)
           return "ok";
           else
           return "Error";
    }

       /* REGISTRO empresa*/ 
    function registroEmpresa($nom,$dire,$cel,$correo,$pas){
        $sql="insert into empresa (nombres, direccion,celular,correo,contrasena) 
        values('$nom','$dire','$cel','$correo','$pas')";
        $res=mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
           if($res)
           return "ok";
           else
           return "Error";
    }


    





}
?>