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
				<a href="MenuPrincipal.php">Inicio</a>
        <a href="EmpGuiaEvaluacion.php?cod=<?=$idemp?>">Guia de Evaluación</a>
				<a href="EmpIngresoElementos.php?cod1=<?=$idemp?>">Gestión de Elementos</a>
				<a href="EmpRespuestas.php?cod2=<?=$idemp?>">Respuestas</a>
        <a href="EmpConyRec.php?cod3=<?=$idemp?>">Conclusiones</a>
			</nav>
		</div>

		<div class="menu-bar-movil">
			<div class="movil-menu" id="movil_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>

			<div class="slideMenu" id="slideMenu">
				<nav class="menu-principal">
					<a href="MenuPrincipal.php">Inicio</a>
					<a href="EmpGuiaEvaluacion.php?cod=<?=$idemp?>">Guia de Evaluación</a>
				  <a href="EmpIngresoElementos.php?cod1=<?=$idemp?>">Gestión de Elementos</a>
				  <a href="EmpRespuestas.php?cod2=<?=$idemp?>">Respuestas</a>
          <a href="EmpConyRec.php?cod3=<?=$idemp?>">Conclusiones</a>
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
                    <h5 class="card-title">Guia de Evaluación</h5>
                    <a href="EmpGuiaEvaluacion.php?cod=<?=$idemp?>" class="btn btn-primary">Ingresar</a>
                  </div>
                </div>
              </div>
              <div class="col" style="padding-top: 150px;">
                  <div class="card">

                    <div class="card-body">
                      <h5 class="card-title">Elementos</h5>
                      <a href="EmpIngresoElementos.php?cod1=<?=$idemp?>" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
              </div>
              <div class="col" style="padding-top: 60px; padding-bottom: 60px;">  
              <div class="card">

                  <div class="card-body">
                    <h5 class="card-title">Respuestas</h5>
                    <a href="EmpRespuestas.php?cod2=<?=$idemp?>" class="btn btn-primary">Ingresar</a>
                  </div>
                </div>
              </div>
              <div class="col" style="padding-top: 60px; padding-bottom: 60px;">
                  <div class="card">

                    <div class="card-body">
                      <h5 class="card-title">Conclusiones y Recomendaciones</h5>
                      <a href="EmpConyRec.php?cod3=<?=$idemp?>" class="btn btn-primary">Ingresar</a>
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

