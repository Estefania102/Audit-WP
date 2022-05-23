<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
// include 'controlador/Negocio.php';
// include_once 'Conexion.php';
// $obj=new Negocio();  
// $correo=$_POST['CorreoCod'];

// $mail = new PHPMailer(true);
// $query= "select * from cliente where correo='$correo'";
// $resultado = $con->query($query);
// if(mysqli_num_rows($resultado) > 0){

// $code=$obj->codigoT($cod,$correo,$estado);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'coesmdp@gmail.com';
    $mail->Password = 'Aplicaciones2017';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('coesmdp@gmail.com', 'PROCESO DE AUDITORIA');
    $mail->addAddress($correo, 'Receptor');
    $mail->addCC('estef.carrillo10@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Formulario para el proceso de Auditoria';
    $mail->Body = 'Buenas tardes, envío el formulario ::> https://forms.gle/FCbjYbAPWgFhA7cP8';
    $mail->send();

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