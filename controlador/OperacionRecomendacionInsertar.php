<?php               
                
                //APARTADO DE RECOMENDACIONES

                //AGREGAR 
                if(isset($_POST['addrecomendaciones'])){
                    session_start();           
                    $idemp= $_POST['idEmp'];
                    $recomendacion= $_POST['recomendacion'];
                               
                    include_once 'Conexion.php';
                    $query="INSERT INTO recomendaciones(recomendacion, idEmpresa) 
                    VALUES ('$recomendacion','$idemp')";
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
                if(isset($_POST['updateRecomendacion'])){            
                    session_start();
                    $idRec= $_POST['idRec'];
                    $recomendacion= $_POST['recomendacion'];
                    try {        
                    include_once 'Conexion.php';
                    $query="update recomendaciones SET recomendacion='$recomendacion'
                    WHERE idRecomendaciones=".$idRec;
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
                if($_POST['registroRecomendacion']=='eliminar'){
                    $idRecomendaciones = $_POST['id'];
                        try{
                    include_once 'Conexion.php';
                    $query="DELETE FROM `recomendaciones` WHERE idRecomendaciones=".$idRecomendaciones;
                   
                if(mysqli_query($con,$query)==1){
                    $respuesta=array(
                        'respuesta' => 'exitoso',
                        'id_borrar' => $idRecomendaciones               
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