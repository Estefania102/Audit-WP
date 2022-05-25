<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>APARTADO RESPUESTAS</title>
	<link rel="stylesheet" href="../css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <section class="main">
<!-- RESPUESTAS -->
        <section id="arespuestas"  class="arespuestas">
			<div class="container">
				<div class="titulo-seccion">
					<h2>RESPUESTAS</h2>
				</div>
            </div>
        </section>
    </section>

    <button class="btn btn-success btnEnvioFormulario">Seleccionar correos</button>
<?php 


// $resultados = array("yourusermail", "meusermail@mail.com", "theyuser@mail.com");

// foreach ($resultados as $resultado){
//      $correo = $resultado; 
//      include "EnvioCorreo.php";
// }

?>

                <!-- Envio formulario -->
                <div class="modal fade modal modal-warning fade" id="custModalEnvioFormulario" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Envio de formulario</h4>
                              <a type="button" href="Respuestas.php" class="close" data-dismiss="modal">&times;</a>
                            </div>                       
                            <div class="modal-body" style="padding-top: 1px;">
                              
                            </div>
                            <div class="modal-footer">
                                <a type="button"  href="Respuestas.php" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>





</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="../lib/bootstrap.min.css">
<script type="text/javascript" src="../js/Principal.js"></script>

</html>