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

                
?>