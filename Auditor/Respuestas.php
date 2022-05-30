<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>APARTADO RESPUESTAS</title>
	<link rel="stylesheet" href="../lib/bootstrap.min.css">
</head>
<?php
        include "../Templates/Head.php";
?>

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

    <button class="btn btn-success btnEnvioFormulario">Envio Formulario</button>
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
<script src="../lib/sweetalert2.all.js"></script>
<script src="../lib/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>