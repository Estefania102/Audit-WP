<!DOCTYPE html>
<html lang="es">
<head>	
	<title>APARTADO RESPUESTAS</title>	   
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
    <div class="botones" style="margin-left: 21%">
    <button class="btn btn-success btnEnvioFormulario">Envio Formulario</button>
    <input type="file" id="txt_archivo">
    <button class="btn btn-success btnImportar">Importar</button>
    </div>
 <!-- $resultados = array("yourusermail", "meusermail@mail.com", "theyuser@mail.com");

 foreach ($resultados as $resultado){
      $correo = $resultado; 
      include "EnvioCorreo.php";
 } -->






 <table id="telementos" class="table table-striped table-bordered" style="width:100%;padding:20px;margin-top: 50px;">
            <thead class="text-center">
                <tr>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Cantidad</th>
                  <th>F.Revisión</th>
                  <th>Estado</th>
                  <th>Observación</th>
                  <th>Editar</th>
                  <th>Eliminar</th>   
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
                    foreach ($melem as $k=>$d){?>
                    <tr>                 
                      <td><?php echo $d[0]?></td>
                      <td><?php echo $d[1]?></td>
                      <td><?php echo $d[2]?></td>
                      <td><?php echo $d[3]?></td>
                      <td><?php echo $d[4]?></td>
                      <td><?php echo $d[5]?></td>
                      <td><?php echo $d[6]?></td>
                      <td><button class='btn btn-primary btnEditarElementos' data-id=<?php echo $d[0]?>>Editar</button>
                      <td><input type="hidden" name="borrar" value=""><button type="submit" data-tipo="Insertar" class='btn btn-danger btnBorrarElementos' data-id=<?php echo $d[0]?>>Eliminar</button></td>
                    </tr>                                                                           
                        <?php }
              ?> 
            </tbody>          
            </table>


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
<!-- Datatable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="../lib/bootstrap.min.css">
<script type="text/javascript" src="../js/Principal.js"></script>
<script src="../lib/sweetalert2.all.js"></script>
<script src="../lib/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
    $("#telementos").DataTable({
       "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      }
    });
  });
  </script>

  <script>
    document.getElementById("txt_archivo").addEventListener("change", () => {
      var fileName = document.getElementById("txt_archivo").value;
      var idxDot = fileName.lastIndexOf(".")+1;
      var extFile = fileName.substr(idxDot,fileName.length).
      toLowerCase();
      if (extFile=="xlsx" || extFile=="xlsb"){

      }else{
Swal.fire("Mensaje de advertencia","Solo se aceptan imagenes, usted subio un archivo con extension"+ extFile,"warning");
document.getElementById("txt_archivo").value="";
      }
    });
  </script>
</html>