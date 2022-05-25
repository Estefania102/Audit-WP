<?php               
                
             
                 //APARTADO DE GUIA DE EVALUACIÓN

                 //AGREGAR 
                if(isset($_POST['addGuiaempresa'])){
                    session_start();           
                    $idemp= $_POST['idG'];
                    $act= $_POST['actividadG'];
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
                    $idRe= $_POST['idGE'];
                    $actividad= $_POST['actividadG'];
                    $procedimiento= $_POST['procedimientoG'];
                    $herramientas= $_POST['herramientaG'];         
                    $observaciones= $_POST['observacionG'];  
                    $idEmpresa=$_POST['idbu'];
                    
                    
                    include_once 'Conexion.php';
                    $query="UPDATE guiaevaluacion SET actividad='$actividad',procedimiento='$procedimiento',herramientas='$herramientas',observaciones='$observaciones',idEmpresa='$idEmpresa' 
                    WHERE idreferencia=".$idRe;
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
                if($_POST['registroGuia']=='eliminar'){
                    $idref = $_POST['id'];
                        try{
                    include_once 'Conexion.php';
                    $query="DELETE FROM `guiaevaluacion` WHERE idreferencia=".$idref;
                   
                if(mysqli_query($con,$query)==1){
                    $respuesta=array(
                        'respuesta' => 'exitoso',
                        'id_borrar' => $idref
                
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