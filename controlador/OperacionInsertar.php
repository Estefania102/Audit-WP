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
                    include_once 'Negocio.php';
                    $obj=new Negocio();
                    $resultado=$obj->loginAuditor($_POST["email"],$_POST["pas"]);
        
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
       
                //LOGIN EMPRESAS
                if(isset($_POST["envialobu"])){
                    include_once 'Negocio.php';
                    $obj=new Negocio();
                    $resultado=$obj->loginEmpresa($_POST["email"],$_POST["pas"]);
        
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
                            'usuario'=>$_SESSION{"nombre"}
        
                        ); 
                    }
                    die(json_encode($respuesta));
                }      
   
                //MENU PRINCIPAL AUDITOR

                //AGREGAR 
                if(isset($_POST['addempresa'])){
                    session_start();           
                    $idaudit=$_SESSION["idAuditor"];
                    $nombre= $_POST['nombreBu'];
                    $direccion= $_POST['direccionBu'];
                    $celular= $_POST['celularBu'];
                    $correo= $_POST['correoBu'];
                    $contrasena= $_POST['contrasenaBu'];
                                 
                    include_once 'Conexion.php';
                    $query="INSERT INTO empresa(nombre,direccion,celular,correo,contrasena,idauditor)
                    VALUES ('$nombre','$direccion','$celular','$correo','$contrasena','$idaudit')";
                    if(mysqli_query($con,$query)==1){
                        $respuesta=array(
                            'respuesta' => 'exitoso'
                        );
                      }
                    else{
                        $respuesta=array(
                            'respuesta' => 'datos incorrectos'
                        );
                    } 
                    die(json_encode($respuesta));
                }  

                // EDITAR
                if(isset($_POST['updateempresa'])){            
                    session_start();
                    $idBu= $_POST['idE'];
                    $nombre= $_POST['nombreBu'];
                    $direccion= $_POST['direccionBu'];
                    $celular= $_POST['celularBu'];         
                    
                    try {
                        
                    include_once 'Conexion.php';
                    $query="UPDATE `empresa` SET `nombre`='$nombre',`direccion`='$direccion',`celular`=$celular WHERE idEmpresa=".$idBu;
                    if(mysqli_query($con,$query)==1){
                        $respuesta=array(
                            'respuesta' => 'exito'                   
                        );
                    } 
                    else{
                        $respuesta=array(
                            'respuesta' => 'datos incorrectos'
                        );
                        }
                    } catch (Exception $e){
                        echo "Error:".$e->get_Message();
                    }                
                    die(json_encode($respuesta));
                    }

                // ELIMINAR
                if($_POST['registro']=='eliminar'){
                    $idbu = $_POST['id'];
                        try{
                    include_once 'Conexion.php';
                    $query="DELETE FROM `empresa` WHERE idEmpresa=".$idbu;
                   
                if(mysqli_query($con,$query)==1){
                    $respuesta=array(
                        'respuesta' => 'exitoso',
                        'id_borrar' => $idbu
                
                    );
                }
                else{
                    $respuesta=array(
                        'respuesta' => 'eliminación incorrecta'
                    );
                  }
                 
                }catch (Exception $e){
                    echo "Error:".$e->get_Message();
                }
                
                die(json_encode($respuesta));
                }

                //INGRESAR
                if(isset($_POST["envialoaud"])){
                    include_once 'Negocio.php';
                    $obj=new Negocio();
                    $resultado=$obj->loginAuditor($_POST["email"],$_POST["pas"]);
        
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
                
                 //APARTADO DE GUIA DE EVALUACIÓN

                 //AGREGAR 
                if(isset($_POST['addGuiaempresa'])){
                    session_start();           
                    $idemp= $_POST['idG'];
                    $$act= $_POST['actividadG'];
                    $prod= $_POST['procedimientoG'];
                    $herra= $_POST['herramientaG'];
                    $obser= $_POST['observacionG'];
                                 
                    include_once 'Conexion.php';
                    $query="INSERT INTO `guiaevaluacion`(`actividad`, `procedimiento`, `herramientas`, `observaciones`, `idEmpresa`) 
                    VALUES ('$act','$prod','$herra', '$obser','$idemp')";
                    if(mysqli_query($con,$query)==1){
                        $respuesta=array(
                            'respuesta' => 'exitoso'
                        );
                      }
                    else{
                        $respuesta=array(
                            'respuesta' => 'datos incorrectos'
                        );
                    } 
                    die(json_encode($respuesta));
                } 

                // EDITAR
                if(isset($_POST['updateGuiaempresa'])){            
                    session_start();
                    $idBu= $_POST['idE'];
                    $nombre= $_POST['nombreBu'];
                    $direccion= $_POST['direccionBu'];
                    $celular= $_POST['celularBu'];         
                    
                    try {
                        
                    include_once 'Conexion.php';
                    $query="UPDATE `empresa` SET `nombre`='$nombre',`direccion`='$direccion',`celular`=$celular WHERE idEmpresa=".$idBu;
                    if(mysqli_query($con,$query)==1){
                        $respuesta=array(
                            'respuesta' => 'exito'                   
                        );
                    } 
                    else{
                        $respuesta=array(
                            'respuesta' => 'datos incorrectos'
                        );
                        }
                    } catch (Exception $e){
                        echo "Error:".$e->get_Message();
                    }                
                    die(json_encode($respuesta));
                    } 
                
?>