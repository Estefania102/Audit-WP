<?php               
                
                // REGISTRO
                    if(isset($_POST["enviareaud"])){
                        include_once 'Conexion.php';
                        include_once 'controlador/Negocio.php';
                        $obj=new Negocio();
                        $nom=$_POST["nombres"];
                        $ape=$_POST["apellidos"];
                        $dire=$_POST["direccion"];
                        $correo=$_POST["correo"];
                        $pas=$_POST["pas"];
                
                        $query= "select * from auditor where correo='$correo'";
                        $resultado = $con->query($query);
                         
                        if(mysqli_num_rows($resultado) > 0){
                            $respuesta = array(
                                'respuesta' => 'Correoexiste'
                            );
                        }else {
                            $obj->registro($nom,$ape,$dire,$correo,$pas);
                        $respuesta=array(
                        'respuesta'=>'exitoso'
                        );
                        }
                    
                
                    die(json_encode($respuesta));
                }

                //LOGIN AUDITOR
                if(isset($_POST["envia10"])){
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
                            $_SESSION["idCliente"]=$resultado[0];
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
       
                
?>