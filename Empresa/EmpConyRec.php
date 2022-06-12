<!DOCTYPE html>
<html lang="es">
<head>
	<title>APARTADO DE CONCLUSIONES</title>
</head>

<?php
include "../Templates/Head.php";
include '../controlador/Negocio.php';
$idem=$_REQUEST['cod3'];
$obj=new Negocio();
session_start();
$mcon=$obj->MostrarCon($idem);
$mrec=$obj->MostrarRec($idem);    

?>
<body>

    <section class="main">
	<!-- COBIT 5 -->
        <section id="ConyRec"  class="ConyRec">
			<div class="container">
				<div class="titulo-seccion">
					<h2>CONCLUSIONES Y RECOMENDACIONES</h2>
				</div>
				<?php
                   include "../Auditor/graficos.php"    
                ?>
				<div class="contenedor-ConyRec">
					<ul id="encabezado_ConyRec" class="encabezado">
						<li><a href="#Conclusiones">Conclusiones</a></li>
						<li><a href="#Recomendaciones">Recomendaciones</a></li>
					</ul>
					<div class="contenido" id="contenido_ConyRec">
						<!-- MENU CONCLUSIONES -->
						<div id="Conclusiones">
							<div class="item">
								<div class="col izq">
								<table id="tconclusion" class="table table-striped table-bordered" style="width:100%;padding:20px;margin-top: 50px;">
									<thead class="text-center">
										<tr>
										<th>N°</th>
										<th>Conclusión</th>  
										</tr>
									</thead>
									<tbody class="text-center">
										<?php
											foreach ($mcon as $k=>$d){?>
											<tr>                 
											<td><?php echo $d[0]?></td>
											<td><?php echo $d[1]?></td>
											</tr>                                                                           
												<?php }
										?> 
									</tbody>          
								</table>
								</div>	
							</div>		
						</div>
					<!-- FIN CONCLUSIONES -->

					<!-- RECOMENDACIONES -->

					<div id="Recomendaciones">
						<div class="item">
							<div class="col izq">							
							<table id="trecomendacion" class="table table-striped table-bordered" style="width:100%;padding:20px;margin-top: 50px;">
								<thead class="text-center">
									<tr>
									<th>N°</th>
									<th>Recomendación</th>  
									</tr>
								</thead>
								<tbody class="text-center">
									<?php
										foreach ($mrec as $k=>$d){?>
										<tr>                 
										<td><?php echo $d[0]?></td>
										<td><?php echo $d[1]?></td>
										</tr>                                                                           
											<?php }
									?> 
								</tbody>          
							</table>
							</div>
						</div>				
					</div> 
					<!-- FIN RECOMENDACIONES -->                   
					</div>
				</div>
			</div>
		</section>
		<!-- FIN  CONYREC  -->
    </section>
<!-- FIN MAIN -->
</body>


<!-- ChartJS -->
<script src="../lib/chart.js/Chart.min.js"></script>

<script src="../js/tabs1.js"></script>

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

  <script>
    $(document).ready(function(){
    $("#tconclusion").DataTable({
       "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      }
    });
  });
  </script>
  <script>
    $(document).ready(function(){
    $("#trecomendacion").DataTable({
       "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      }
    });
  });
  </script>
</html>