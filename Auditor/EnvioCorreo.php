<?php

require_once '../lib/vendor/PHPMailer/PHPMailer/src/Exception.php';
require_once '../lib/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require_once '../lib/vendor/PHPMailer/PHPMailer/src/SMTP.php';
require_once '../lib/vendor/autoload.php';
// include 'controlador/Negocio.php';
// include_once 'Conexion.php';
// $obj=new Negocio();  
// $correo=$_POST['CorreoCod'];
use PHPMailer\PHPMailer\PHPMailer;
 $mail = new PHPMailer(true);
// $query= "select * from cliente where correo='$correo'";
// $resultado = $con->query($query);
// if(mysqli_num_rows($resultado) > 0){
// $code=$obj->codigoT($cod,$correo,$estado);

if(isset($_POST['nuevocorreo'])){           
    $correo= $_POST['correo'];
    // echo $correo;
}
    
    // $emails = array();
    // array_push($emails,$correo);

// for($i = 0; $i < count($emails); $i++) {
    try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'coesmdp@gmail.com';
    $mail->Password = 'Aplicaciones2017';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('coesmdp@gmail.com', 'PROCESO DE AUDITORIA');
    $mail->AddAddress($correo);
    

    // $mail->addAddress($correo, 'Receptor');
    $mail->addCC('estef.carrillo10@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Formulario para el proceso de Auditoria';
    $mail->Body = 'Buenas tardes, envío el formulario ::> https://forms.gle/FCbjYbAPWgFhA7cP8';
    $mail->send();
    header('location:Respuestas.php');
    } catch (Exception $e) {
        echo 'Hubo un error al enviar el mensaje: ', $mail->ErrorInfo;

    }
    

    
// }

// $respuesta=array(
// 'respuesta'=>'exitoso'
// );
// }else{
//     $respuesta=array(
//         'respuesta'=>'incorrecto'
//         );
// }

// die(json_encode($respuesta));

?>