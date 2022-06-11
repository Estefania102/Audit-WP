<?php               
                
                //APARTADO DE INGRESO DE ELEMENTOS

                //AGREGAR 
                if(isset($_POST['addconclusion'])){
                    session_start();           
                    $idemp= $_POST['idEmp'];
                    $con= $_POST['conclusion'];
                                 
                    include_once 'Conexion.php';
                    $query="INSERT INTO conclusiones(conclusion, idEmpresa) 
                    VALUES ('$con','$idemp')";
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
                if(isset($_POST['updateConclusion'])){            
                    session_start();
                    $idCon= $_POST['idCon'];
                    $con= $_POST['conclusion'];
                    try {        
                    include_once 'Conexion.php';
                    $query="update conclusiones SET conclusion='$con' 
                    WHERE idConclusiones=".$idCon;
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
                if($_POST['registroConclusion']=='eliminar'){
                    $idele = $_POST['id'];
                        try{
                    include_once 'Conexion.php';
                    $query="DELETE FROM `conclusiones` WHERE idConclusiones=".$idele;
                   
                if(mysqli_query($con,$query)==1){
                    $respuesta=array(
                        'respuesta' => 'exitoso',
                        'id_borrar' => $idele               
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

?>