<?php               
                
                //APARTADO DE INGRESO DE ELEMENTOS

                //AGREGAR 
                if(isset($_POST['addelementos'])){
                    session_start();           
                    $idele= $_POST['idEle'];
                    $nombre= $_POST['nombreEle'];
                    $desc= $_POST['descEle'];
                    $cant= $_POST['cantEle'];
                    $date= $_POST['dates'];
                    $campo= $_POST['camposr'];
                    $obser= $_POST['obserEle'];
                                 
                    include_once 'Conexion.php';
                    $query="INSERT INTO elementos(nombre, descripcion, cantidad, frevision, estado, observacion, idEmpresa) 
                    VALUES ('$nombre','$desc','$cant','$date',$campo,'$obser','$idele')";
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
                if(isset($_POST['updateElemento'])){            
                    session_start();
                    $idEle= $_POST['idEle'];
                    $nombre= $_POST['nombreEle'];
                    $desc= $_POST['descEle'];
                    $cant= $_POST['cantEle'];
                    $date= $_POST['dates'];
                    $campo= $_POST['camposr'];
                    $obser= $_POST['obserEle'];
                    try {        
                    include_once 'Conexion.php';
                    $query="update elementos SET nombre='$nombre',descripcion='$desc',cantidad='$cant',frevision='$date',estado='$campo',observacion='$obser' 
                    WHERE idelementos=".$idEle;
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
                if($_POST['registroElemento']=='eliminar'){
                    $idele = $_POST['id'];
                        try{
                    include_once 'Conexion.php';
                    $query="DELETE FROM `elementos` WHERE idelementos=".$idele;
                   
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