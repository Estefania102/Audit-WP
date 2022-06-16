<!DOCTYPE html>
<html lang="en">
<head>
   <title>Guia de evaluacion</title>
   <link rel='stylesheet' href='../lib/sweetalert2.min.css'>
</head>
<?php
        include "../Templates/Head.php";
        include '../controlador/Negocio.php';
        $idem=$_GET['cod'];
        $obj=new Negocio();       
        session_start(); 
        $idaudit=$_SESSION["idAuditor"];    
        $namemp=$obj->NombreEmpresa($idem);  
        $namarea=$obj->NombreArea($idem); 
        $mguia=$obj->Mostrarguia($idem);
      ?>
      
<body>
    <header>
		<div class="menu-bar-pc" style="padding:0 30.25rem; font-size: 26px; font-family: 'Playfair Display', serif; color: #303133;">
			<nav class="menu-principal">
        <a>Guia de evaluación</a>
      </nav>
    </div>
    <div class="menu-movil">
      <div class="slide" id="slide">
          <nav class="menu-principal">
          <a>Guia de evaluación</a>
          </nav>
			</div>
      </div>
    </header>
<!-- BOTON NUEVO -->
        <div style="margin-top: 3%;margin-bottom: 3%;display: grid; grid-template-columns: 1fr 1fr;text-align: center;">
          <div>
        <?php
          foreach ($namemp as $k=>$d){?>
            <a>Nombre de la empresa: <?php echo $d[0]?></a></br> 
            </div> 
            <?php }
        ?>
            <div>  
            <?php
          foreach ($namarea as $k=>$d){?>     
            <a>Nombre del área a auditar: <?php echo $d[0]?></a>
        <?php }
        ?> 
           </div>
        </div>
    <div class="container-btn">
      <div class="row">    
        <div class="col-lg-12" >                   
        <button class="btn btn-success btnAgregarG" style="margin-left: 45%;margin-bottom: 3%;" data-id="<?php echo $idem;?>">Nuevo</button>
        </div>
      </div>
    </div>
            <table id="tguia" class="table table-striped table-bordered" style="width:100%;padding:20px;margin-top: 50px;">
            <thead class="text-center">
                <tr>
                  <th>Referencia</th>
                  <th>Actividad que será evaluada</th>
                  <th>Procedimiento de auditoría</th>
                  <th>Herramientas que serán utilizadas</th>
                  <th>Observaciones</th> 
                  <th>Editar</th>
                  <th>Eliminar</th>   
                </tr>
            </thead>
            <tbody class="text-center">
            <?php
                    foreach ($mguia as $k=>$d){?>
                    <tr>                 
                      <td><?php echo $d[0]?></td>
                      <td><?php echo $d[1]?></td>
                      <td><?php echo $d[2]?></td>
                      <td><?php echo $d[3]?></td>
                      <td><?php echo $d[4]?></td>
                      <td><button class='btn btn-primary btnGuiaEditar' data-id="<?php echo $d[0]?>">Editar</button>
                      <td><input type="hidden" name="borrar" value=""><button type="submit" data-tipo="Insertar" class='btn btn-danger btnBorrarGuia' data-id=<?php echo $d[0]?>>Eliminar</button></td>
                    </tr>                                                                           
                        <?php }
              ?> 
            </tbody>          
            </table>
            <!-- NUEVO -->
                  <div class="modal fade modal modal-warning fade" id="custModalGuia" role="dialog" tabindex="-1" aria-labelledby="custModalAgregarGuia" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Nuevo</h4>
                              <a type="button" href="GuiaEvaluacion.php?cod=<?=$idem?>" class="close" data-dismiss="modal">&times;</a>
                              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>                       
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                                <a type="button"  href="GuiaEvaluacion.php?cod=<?=$idem?>" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                            </div>
                        </div>
                    </div>
                  </div>

            <!-- EDITAR -->
                  <div class="modal fade modal modal-warning fade" id="custModalGuia" role="dialog" tabindex="-1" aria-labelledby="custModalEditarGuia" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar</h4>
                              <a type="button" href="GuiaEvaluacion.php?cod=<?=$idem?>" class="close" data-dismiss="modal">&times;</a>
                            </div>                       
                            <div class="modal-body">
                              
                            </div>
                            <div class="modal-footer">
                                <a type="button"  href="GuiaEvaluacion.php?cod=<?=$idem?>" class="btn btn-default" data-dismiss="modal">Cancelar</a>
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

  <script>
    $(document).ready(function(){
    $("#tguia").DataTable({
       "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
      }
    });
  });
  </script>
      
</html>