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
        <section id="cobit5"  class="cobit5">
			<div class="container">
				<div class="titulo-seccion">
					<h2>CONCLUSIONES Y RECOMENDACIONES</h2>
				</div>
				<div class="contenedor-cobit">
					<ul id="encabezado_cobit" class="encabezado">
						<li><a href="#dominio">Conclusiones</a></li>
						<li><a href="#procesos">Recomendaciones</a></li>
					</ul>
					<div class="contenido" id="contenido_cobit">
						<!-- MENU CONCLUSIONES -->
						<div id="dominio">
							<div class="item">
								<div class="col izq">
								<div class="container-btn">
							<div class="row">    
								<div class="col-lg-12">
								<button class="btn btn-success btnAgregarComclusiones" data-id="<?php echo $idem;?>">Nuevo</button>
								</div>
							</div>
							</div>
								<table id="tconclusion" class="table table-striped table-bordered" style="width:100%;padding:20px;margin-top: 50px;">
									<thead class="text-center">
										<tr>
										<th>N°</th>
										<th>Conclusión</th>
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
											<td><button class='btn btn-primary btnEditarConclusiones' data-id=<?php echo $d[0]?>>Editar</button>
											<td><input type="hidden" name="borrar" value=""><button type="submit" data-tipo="Insertar" class='btn btn-danger btnBorrarComclusiones' data-id=<?php echo $d[0]?>>Eliminar</button></td>
											</tr>                                                                           
												<?php }
										?> 
									</tbody>          
								</table>

					<!-- NUEVO -->
					<div class="modal fade modal modal-warning fade" id="custModalConclusiones" role="dialog" tabindex="-1" aria-labelledby="custModalAgregarConclusion" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Nuevo</h4>
                              <a type="button" href="ConyRec.php?cod3=<?=$idem?>" class="close" data-dismiss="modal">&times;</a>
                            </div>                       
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                                <a type="button"  href="ConyRec.php?cod3=<?=$idem?>" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            </div>
                        </div>
                    </div>
                  </div>

            <!-- EDITAR -->
                  <div class="modal fade modal modal-warning fade" id="custModalConclusiones" role="dialog" tabindex="-1" aria-labelledby="custModalEditarConclusion" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar</h4>
                              <a type="button" href="ConyRec.php?cod3=<?=$idem?>" class="close" data-dismiss="modal">&times;</a>
                            </div>                       
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                              <a type="button"  href="ConyRec.php?cod3=<?=$idem?>" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            </div>
                        </div>
                    </div>
                  </div> 
								</div>	
							</div>		
						</div>
					<!-- FIN CONCLUSIONES -->

					<!-- RECOMENDACIONES -->

					<div id="procesos">
						<div class="item">
							<div class="col izq">
							<div class="container-btn">
						<div class="row">    
							<div class="col-lg-12">
							<button class="btn btn-success btnAgregarRecomendaciones" data-id="<?php echo $idem;?>">Nuevo</button>
							</div>
						</div>
						</div>
							<table id="trecomendacion" class="table table-striped table-bordered" style="width:100%;padding:20px;margin-top: 50px;">
								<thead class="text-center">
									<tr>
									<th>N°</th>
									<th>Recomendación</th>
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
										<td><button class='btn btn-primary btnEditarRecomendaciones' data-id=<?php echo $d[0]?>>Editar</button>
										<td><input type="hidden" name="borrar" value=""><button type="submit" data-tipo="Insertar" class='btn btn-danger btnBorrarRecomendaciones' data-id=<?php echo $d[0]?>>Eliminar</button></td>
										</tr>                                                                           
											<?php }
									?> 
								</tbody>          
							</table>
							
							<!-- NUEVO -->
							<div class="modal fade modal modal-warning fade" id="custModalRecomendacion" role="dialog" tabindex="-1" aria-labelledby="custModalAgregarRecomendacion" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Nuevo</h4>
                              <a type="button" href="IngresoElementos.php?cod1=<?=$idem?>" class="close" data-dismiss="modal">&times;</a>
                            </div>                       
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                                <a type="button"  href="IngresoElementos.php?cod1=<?=$idem?>" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            </div>
                        </div>
                    </div>
                  </div>

            <!-- EDITAR -->
                  <div class="modal fade modal modal-warning fade" id="custModalRecomendacion" role="dialog" tabindex="-1" aria-labelledby="custModalEditarRecomendacion" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar</h4>
                              <a type="button" href="IngresoElementos.php?cod1=<?=$idem?>" class="close" data-dismiss="modal">&times;</a>
                            </div>                       
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                              <a type="button"  href="IngresoElementos.php?cod1=<?=$idem?>" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            </div>
                        </div>
                    </div>
                  </div> 
							</div>
						</div>				
					</div> 
					<!-- FIN RECOMENDACIONES -->                   
					</div>
				</div>
			</div>
		</section>
		<!-- FIN  COBIT 5  -->
    </section>
<!-- FIN MAIN -->
</body>

<script src="../js/tabs.js"></script>

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