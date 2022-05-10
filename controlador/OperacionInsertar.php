<?php               
                
                // REGISTRO AUDITOR
                    if(isset($_POST["enviareaud"])){
                        include_once 'Conexion.php';
                        include_once 'Negocio.php';
                        $obj=new Negocio();
                        $nom=$_POST["nombres"];
                        $ape=$_POST["apellidos"];
                        $dire=$_POST["direccion"];
                        $correo=$_POST["correo"];
                        $contrasena=$_POST["contrasena"];
                
                        $query= "select * from auditor where correo='$correo'";
                        $resultado = $con->query($query);
                         
                        if(mysqli_num_rows($resultado) > 0){
                            $respuesta = array(
                                'respuesta' => 'Correoexiste'
                            );
                        }else {
                            $obj->registroAudit($nom,$ape,$dire,$correo,$contrasena);
                        $respuesta=array(
                        'respuesta'=>'exitoso'
                        );
                        }               
                    die(json_encode($respuesta));
                }

                //LOGIN AUDITOR
                if(isset($_POST["envialoaud"])){
                    include_once 'controlador/Negocio.php';
                    $obj=new Negocio();
                    $resultado=$obj->login($_POST["email"],$_POST["pas"]);
        
                    if($resultado=="error"){
                        $respuesta=array(
                            'respuesta'=>'error'
                        );
                    }else{
                        session_start();
                        for($x=0;$x<count($resultado);$x++){
                            $_SESSION["idAuditor"]=$resultado[0];
                            $_SESSION["nombres"]=$resultado[1];
                            $_SESSION["apellidos"]=$resultado[2];
                            $_SESSION["correo"]=$resultado[3];
                        }
                        $respuesta=array(
                            'respuesta'=>'exitoso',
                            'usuario'=>$_SESSION{"nombres"}
        
                        ); 
                    }
                    die(json_encode($respuesta));
                }      
       
                // REGISTRO EMPRESA
                if(isset($_POST["enviarebu"])){
                    include_once 'Conexion.php';
                    include_once 'Negocio.php';
                    $obj=new Negocio();
                    $nom=$_POST["nombre"];
                    $dire=$_POST["direccion"];
                    $cel=$_POST["celular"];
                    $correo=$_POST["correo"];
                    $contrasena=$_POST["contrasena"];
            
                    $query= "select * from empresa where correo='$correo'";
                    $resultado = $con->query($query);
                     
                    if(mysqli_num_rows($resultado) > 0){
                        $respuesta = array(
                            'respuesta' => 'Correoexiste'
                        );
                    }else {
                        $obj->registroEmpresa($nom,$dire,$cel,$correo,$contrasena);
                    $respuesta=array(
                    'respuesta'=>'exitoso'
                    );
                    }
                
            
                die(json_encode($respuesta));
            }

                //LOGIN EMPRESAS
                if(isset($_POST["enviarebu"])){
                    include_once 'controlador/Negocio.php';
                    $obj=new Negocio();
                    $resultado=$obj->login($_POST["email"],$_POST["pas"]);
        
                    if($resultado=="error"){
                        $respuesta=array(
                            'respuesta'=>'error'
                        );
                    }else{
                        session_start();
                        for($x=0;$x<count($resultado);$x++){
                            $_SESSION["idEmpresa"]=$resultado[0];
                            $_SESSION["nombre"]=$resultado[1];
                            $_SESSION["correo"]=$resultado[2];
                        }
                        $respuesta=array(
                            'respuesta'=>'exitoso',
                            'usuario'=>$_SESSION{"nombres"}
        
                        ); 
                    }
                    die(json_encode($respuesta));
                }      
   
                
?>