<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu Principal</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
        include "../Templates/Head.php";
        include '../controlador/Negocio.php';
        
        $obj=new Negocio();       
        session_start(); 
        $idemp=$_SESSION["idEmpresa"];    
        $emp=$obj->Insertarbu($idemp);  
      ?>
<body>
 <!-- ENCABEZADO -->
 <header>
		<div class="menu-bar-pc" style="padding: 0 19.95rem">
			<nav class="menu-principal">
				<a href="#">Inicio</a>
				<a href="#evaluacion">Guía de Evaluación</a>
				<a href="#elementos">Gestión de Elementos</a>
				<a href="#respuestas">Respuestas</a>
        <a href="#conclusiones">Conclusiones</a>
			</nav>
		</div>

		<div class="menu-bar-movil">
			<div class="movil-menu" id="movil_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>

			<div class="slideMenu" id="slideMenu">
				<nav class="menu-principal">
					<a href="#">Inicio</a>
					<a href="#evaluacion">Guia de Evaluación</a>
				    <a href="#elementos">Gestión de Elementos</a>
				    <a href="#respuestas">Respuestas</a>
            <a href="#conclusiones">Conclusiones</a>
				</nav>
			</div>			
		</div>
	</header>
<!-- FIN DE ENCABEZADO --> 
<div class="cardPer" >
<div class="container principal" > 
	<div class="row" >
		    <div class="col-lg-12 text-center">
            <div class="row row-cols-1 row-cols-md-2 g-12">
              <div class="col" style="padding-top: 150px;">  
              <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">Actualizar horario</h5>
                    <a href="ActualizarPer.php" class="btn btn-primary">Actualizar</a>
                  </div>
                </div>
              </div>
              <div class="col" style="padding-top: 150px;">
                  <div class="card">

                    <div class="card-body">
                      <h5 class="card-title">Visualizar reserva</h5>
                      <a href="VisualizarPer.php" class="btn btn-primary">Visualizar</a>
                    </div>
                  </div>
              </div>
              <div class="col" style="padding-top: 60px; padding-bottom: 60px;">  
              <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">Actualizar horario</h5>
                    <a href="ActualizarPer.php" class="btn btn-primary">Actualizar</a>
                  </div>
                </div>
              </div>
              <div class="col" style="padding-top: 60px; padding-bottom: 60px;">
                  <div class="card">

                    <div class="card-body">
                      <h5 class="card-title">Visualizar reserva</h5>
                      <a href="VisualizarPer.php" class="btn btn-primary">Visualizar</a>
                    </div>
                  </div>
              </div>
           </div>
        </div>
    </div>
</div>
</div>
<!-- PIE DE PAGINA -->
<footer>
		<p class="copyright">Todos los derechos reservados</p>	
	</footer>
<!-- FIN DE PIE DE PAGINA -->
<script src="../js/menuMovil.js"></script>

</body>
</html>

