<!DOCTYPE html>
<html lang="en">
<head>
    <title>INGRESO EMPRESA</title>
</head>
<?php
        include "../Templates/Head.php";
        include '../controlador/Negocio.php';
        $idem=$_REQUEST['cod'];
        $obj=new Negocio();       
        session_start(); 
        $idaudit=$_SESSION["idAuditor"];    
        $emp=$obj->Insertarbu($idaudit);
		$namemp=$obj->NombreEmpresa($idem); 
      ?>	
<body>
	<!-- ENCABEZADO -->
	<header>
		<div class="menu-bar-pc" style="padding: 0 17.25rem">
			<nav class="menu-principal">
				<a href="#" class="volver-arriba">Inicio</a>
				<a href="#evaluacion" class="scroll-suave">Guía de Evaluación</a>
				<a href="#elementos" class="scroll-suave">Gestión de Elementos</a>
				<a href="#respuestas" class="scroll-suave">Respuestas</a>
				<a href="#cobit" class="scroll-suave">COBIT 5</a>
                <a href="#conclusiones" class="scroll-suave">Conclusiones</a>
			</nav>
			<div class="pull-right">
                  <a href="LoginAuditor.php?cerrar_sesion=true" style="background: #A4A4A4; color: #fff; padding: 10px 5px; display: block; text-align: center;">CERRAR SESION</a>
			</div>
		</div>

		<div class="menu-bar-movil">
			<div class="movil-menu" id="movil_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>

			<div class="slideMenu" id="slideMenu">
				<nav class="menu-principal">
					<a href="#" class="volver-arriba">Inicio</a>
					<a href="#evaluacion" class="scroll-suave">Guia de Evaluación</a>
				    <a href="#elementos" class="scroll-suave">Gestión de Elementos</a>
				    <a href="#respuestas" class="scroll-suave">Respuestas</a>
				    <a href="#cobit" class="scroll-suave">COBIT 5</a>
                    <a href="#conclusiones" class="scroll-suave">Conclusiones</a>
				</nav>
				<div class="pull-right">
                  <a href="LoginAuditor.php?cerrar_sesion=true" style="background: #A4A4A4; color: #fff; padding: 10px 5px; display: block; text-align: center;margin-top: 15px;">CERRAR SESION</a>
			</div>
			</div>			
		</div>
	</header>
<!-- FIN DE ENCABEZADO -->

<!-- MAIN -->
	<section class="main">
		<!-- PORTADA -->
		<section class="portada" id="portada">
			<div class="col">
			<div class="foto-full der lightbox">
					<div class="overlay">
						<i class="fas fa-plus"></i>
					</div>
				</div>
				<?php
                    foreach ($namemp as $k=>$d){?>				
				<div class="texto">					
					<h2>Proceso de Auditoria a los sistemas de información de:</h2>
					<p><?php echo $d[0];?></p>	
				</div>
				<?php }?>
			</div>		
		</section>
		<!-- FIN PORTADA -->

		<!-- EVALUACIÓN -->
		<section class="evaluacion" id="evaluacion">
			<div class="container">
				<div class="col izq">
					<div class="titulo-seccion">
						<h2>Guía de evaluación</h2>
					</div>
				</div>
				<div class="col der">
					<div class="texto">
						<p>Documento formal que permite hacer seguimiento paso a paso de todos los procedimientos a evaluar, con la finalidad de realizar una adecuada revisión a los sistemas de información. </p>				
					</div>			
				</div>	
				<a href="GuiaEvaluacion.php?cod=<?=$idem?>" class='btns' style="margin:8% auto 0px auto;">Guía de evaluación</a>
				</div>
			</div>
		</section>
		<!-- FIN EVALUACIÓN -->

		<!-- GESTIÓN DE ELEMENTOS -->
		<section class="elementos" id="elementos">
			<div class="container">
				<div class="col izq">
					<div class="slider" id="slider">
						<div class="slide foto1"></div>
						<div class="slide foto2"></div>
						<div class="slide foto3"></div>
					</div>
				</div>
				<div class="col">
					<div class="titulo-seccion">
						<h2>Gestión de elementos</h2>
						<p>Se utiliza para actualizar la tabla elementos de la auditoría.</p>
						<p>Permite introducir la información de los elementos de cada componente que serán objeto de revisión durante la auditoria</p>
					</div>				
				</div>
				<a href="IngresoElementos.php?cod1=<?=$idem?>" class='btns' style="margin:8% auto 0px auto;">Gestión de elementos</a>
			</div>
		</section>
		<!--FIN GESTIÓN DE ELEMENTOS -->

		<!-- RESPUESTAS -->
		<section class="respuestas" id="respuestas">
			<div class="container">
				<div class="col izq">
					<div class="titulo-seccion">
						<h2>Respuestas</h2>
					</div>
				</div>
				<div class="col der">
					<div class="texto">
						<p>Se utiliza para actualizar la tabla que contiene información sobre las respuestas al cuestionario aplicado en la auditoría.</p>
						<p>Permite introducir las respuestas, debilidades, efectos y recomendaciones de cada elemento auditado. Por otra parte, permite revisar las respuestas y el análisis de los registros ya ingresados.</p>
					</div>			
				</div>
				<a href="Respuestas.php?cod2=<?=$idem?>" class='btns' style="margin:8% auto 0px auto;">Respuestas</a>
			</div>
		</section>
		<!-- RESPUESTAS -->

        <!-- COBIT -->
		<section class="cobit" id="cobit">
			<div class="container">
				<div class="col izq">
					<div class="slider" id="slider">
						<div class="slide foto1"></div>
						<div class="slide foto2"></div>
						<div class="slide foto3"></div>
					</div>
				</div>
				<div class="col">
					<div class="titulo-seccion">
						<h2>COBIT 5</h2>
						<p>COBIT 5 brinda mecanismos de apoyo que ayudan a los ejecutivos a disminuir la diferencia existente entre los requisitos de verificación, las cuestiones tecnológicas y amenazas al negocio. </p>
						<p>Mejora la capacidad de definir controles, seguridad y gobierno de procesos en el dominio de TI de las organizaciones.</p>
					</div>
				</div>
				<a href="COBIT.php" class='btns' style="margin:8% auto 0px auto;">COBIT 5</a>
			</div>
		</section>
		<!--FIN COBIT-->

		<!-- CONCLUSIONES -->
		<section class="conclusiones" id="conclusiones">
			<div class="datos parallax">
				<div class="overlay">					
				</div>
				<div class="container">					
					<div class="blurb">
						<h3>Conclusiones y Recomendaciones</h3>
						<p>Según el análisis de la auditoría se expone el resultado obtenido del estado de los componentes de los sistemas de información. Además, se brindarán conclusiones y recomendaciones de la auditoria realizada.<br></p>
					</div>
					<a href="ConyRec.php?cod3=<?=$idem?>" class='btns' style="margin:8% auto 0px auto;">Conclusiones</a>	
				</div>
			</div>			
		</section>
		<!-- FIN CONCLUSIONES -->
	</section>
<!-- FIN MAIN -->

<!-- PIE DE PAGINA -->
	<footer>
		<p class="copyright">Todos los derechos reservados</p>	
	</footer>
<!-- FIN DE PIE DE PAGINA -->
	<script src="../js/lightbox.js"></script>
	<script src="../js/slider.js"></script>
	<script src="../js/tabs.js"></script>
	<script src="../js/bgParallax.js"></script>
	<script src="../js/scroll.js"></script>
	<script src="../js/menuMovil.js"></script>
</body>
</html>
