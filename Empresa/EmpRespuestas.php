<!DOCTYPE html>
<html lang="es">
<head>	
	<title>APARTADO RESPUESTAS</title>	   
</head>
<?php
        include "../Templates/Head.php";
        include '../controlador/Negocio.php';
        $idem=$_REQUEST['cod2'];
        $obj=new Negocio();
        session_start();
        $mresp=$obj->Mostrarresp($idem);         
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
 <!-- $resultados = array("yourusermail", "meusermail@mail.com", "theyuser@mail.com");

 foreach ($resultados as $resultado){
      $correo = $resultado; 
      include "EnvioCorreo.php";
 } -->

 <table id="telementos" class="table table-striped table-bordered" style="width:100%;margin-top: 50px;">
            <thead class="text-center">
                <tr>
                  <th>N°</th>
                  <th>Nombre</th>
                  <th>Ubicación segura</th>
                  <th>Cableado correcto</th>
                  <th>Interruptor protegido</th>
                  <th>Mant.</th>
                  <th>Programa de protección</th>
                  <th>Control de acceso</th>
                  <th>Claves para BD</th>  
                  <th>Personal informado</th>
                  <th>Manual de programas</th>   
                  <th>Personal realiza quejas</th> 
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
                    foreach ($mresp as $k=>$d){?>
                    <tr>                 
                      <td><?php echo $d[0]?></td>
                      <td><?php echo $d[1]?></td>
                      <td><?php echo $d[2]?></td>
                      <td><?php echo $d[3]?></td>
                      <td><?php echo $d[4]?></td>
                      <td><?php echo $d[5]?></td>
                      <td><?php echo $d[6]?></td>
                      <td><?php echo $d[7]?></td>
                      <td><?php echo $d[8]?></td>
                      <td><?php echo $d[9]?></td>
                      <td><?php echo $d[10]?></td>
                      <td><?php echo $d[11]?></td>
                    </tr>                                                                           
                        <?php }
                        ?> 
            </tbody>                    
            </table>

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

  
</html>