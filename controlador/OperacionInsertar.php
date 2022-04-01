<?php               
                
                // REGISTRO
                    if(isset($_POST["envia5"])){
                        include_once 'Conexion.php';
                        include_once 'controlador/Negocio.php';
                        $obj=new Negocio();
                        $nom=$_POST["nombre"];
                        $ape=$_POST["apellido"];
                        $dire=$_POST["direccion"];
                        $cel=$_POST["celular"];
                        $correo=$_POST["correo"];
                        $pas=$_POST["pas"];
                
                        $query= "select * from cliente where correo='$correo'";
                        $resultado = $con->query($query);
                         
                        if(mysqli_num_rows($resultado) > 0){
                            $respuesta = array(
                                'respuesta' => 'Correoexiste'
                            );
                        }else {
                            $obj->registro($nom,$ape,$dire,$cel,$correo,$pas);
                        $respuesta=array(
                        'respuesta'=>'exitoso'
                        );
                        }
                    
                
                    die(json_encode($respuesta));
                }
                
?>