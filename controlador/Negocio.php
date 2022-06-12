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

    /* LOGIN Empresa*/ 
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
    
    //GUIA DE EVALUACIÓN 

    function NombreEmpyar($upbu){      
        $sql="select `nombre`,`area` FROM `empresa` WHERE idEmpresa=".$upbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    /* MOSTRAR GUIA DE EVALUACIÓN*/ 
    function Mostrarguia($idbu){      
        $sql="select idreferencia,actividad,procedimiento,herramientas,observaciones from guiaevaluacion
        WHERE idEmpresa=".$idbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }
    //Modificar
    function UpdateGuia($upgi){      
        $sql="select idreferencia, actividad, procedimiento, herramientas, observaciones,idEmpresa FROM guiaevaluacion 
        WHERE idreferencia=".$upgi;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //APARTADO DE INGRESO DE ELEMENTOS

    //NUEVO 
    
    /* MOSTRAR ELEMENTOS*/ 
    function Mostrarelemen($idbu){      
        $sql="select idelementos, nombre, descripcion, cantidad, frevision, estado, observacion 
        FROM elementos WHERE idEmpresa=".$idbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //Modificar
    function UpdateElemento($upre){      
        $sql="select idelementos, nombre, descripcion, cantidad, frevision, estado, observacion 
        FROM elementos WHERE idelementos=".$upre;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    function ListarEstado($idele){      
        $sql="select estado from elementos where idelementos=".$idele;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //APARTADO DE RESPUESTAS
    
    /* MOSTRAR RESPUESTAS*/ 

    function Mostrarresp($idbu){      
        $sql="select idRespuesta, nombre,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10 
        FROM respuesta WHERE idEmpresa=".$idbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //APARTADO DE CONCLUSIONES

    //NUEVO 
    
    /* MOSTRAR CONCLUSIONES*/ 
    function MostrarCon($idbu){      
        $sql="select idConclusiones, conclusion
        FROM conclusiones WHERE idEmpresa=".$idbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //Modificar
    function UpdateConclusion($upre){      
        $sql="select idConclusiones, conclusion 
        FROM conclusiones WHERE idConclusiones=".$upre;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //APARTADO DE RECOMENDACIONES
    //NUEVO 
    /* MOSTRAR RECOMENDACIONES*/ 
    function MostrarRec($idbu){      
        $sql="select idRecomendaciones,recomendacion 
        FROM recomendaciones WHERE idEmpresa=".$idbu;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }

    //Modificar
    function UpdateRecomendacion($upre){      
        $sql="select idRecomendaciones,recomendacion 
        FROM recomendaciones WHERE idRecomendaciones=".$upre;
        $res=  mysqli_query($this->cn, $sql) or die(mysqli_error($this->cn));
        $vec=array();
        while($f=  mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;
    }   


    
}
?>

