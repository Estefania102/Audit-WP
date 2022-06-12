<?php               
   
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
                    $area= $_POST['areaBu'];
                                 
                    include_once 'Conexion.php';
                    $query="INSERT INTO empresa(nombre,direccion,celular,correo,contrasena,idauditor,area)
                    VALUES ('$nombre','$direccion','$celular','$correo','$contrasena','$idaudit','$area')";
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
                    die(json_encode($respuesta));
                }

                // ELIMINAR
                if($_POST['registroLista']=='eliminar'){
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

?>