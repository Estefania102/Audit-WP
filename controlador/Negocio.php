<?php
class Negocio{
    private $cn=null;
    function __construct() {
        if($this->cn==null){
            $this->cn=  mysqli_connect("localhost", "root", "", "bdauditwp");
        }
        return $this->cn;
    }

    /* REGISTRO CLIENTE*/ 
    function registro($nom,$ape,$dire,$cel,$correo,$pas){
        $sql="insert into cliente (nombres, apellidos, direccion,celular,correo,contraseña) 
        values('$nom','$ape','$dire','$cel','$correo','$pas')";
        $res=mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
           if($res)
           return "ok";
           else
           return "Error";
       }




    





}
?>