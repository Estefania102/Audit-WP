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
		<div class="menu-bar-pc" style="padding:0 12.25rem">
			<nav class="menu-principal">
				<a href="#" class="volver-arriba">Inicio</a>
				<a href="#evaluacion" class="scroll-suave">Guía de Evaluación</a>
				<a href="#elementos" class="scroll-suave">Gestión de Elementos</a>
				<a href="#respuestas" class="scroll-suave">Respuestas</a>
				<a href="#cobit" class="scroll-suave">COBIT 5</a>
                <a href="#conclusiones" class="scroll-suave">Conclusiones</a>
			</nav>

			<div class="top-redes">
				<a href="#">
					<i class="fab fa-facebook"></i>
				</a>		
			</div>
		</div>

		<div class="menu-bar-movil">
			<div class="movil-menu" id="movil_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>

			<div class="slideMenu" id="slideMenu">
				<div class="top-redes">
					<a href="#">
						<i class="fab fa-facebook"></i>
					</a>		
				</div>
				<nav class="menu-principal">
					<a href="#" class="volver-arriba">Inicio</a>
					<a href="#evaluacion" class="scroll-suave">Guia de Evaluación</a>
				    <a href="#elementos" class="scroll-suave">Gestión de Elementos</a>
				    <a href="#respuestas" class="scroll-suave">Respuestas</a>
				    <a href="#cobit" class="scroll-suave">COBIT 5</a>
                    <a href="#conclusiones" class="scroll-suave">Conclusiones</a>
				</nav>
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
						<p>Documento formal que permite hacer seguimiento paso a paso de todos los procedimiento a evaluar, con la finalidad de realizar una adecuada revisión a los sistemas de información. </p>				
					</div>
					<a href="AuditMenuPrincipal.php" class='btns'>Guía de evaluación</a>
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
					<a href="AuditMenuPrincipal.php" class='btns'>Gestión de elementos</a>
				</div>
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
					<a href="AuditMenuPrincipal.php" class='btns' style="margin-left: 40%;">Respuestas</a>
				</div>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, fuga.</p>
						<p>Blanditiis assumenda odit, sunt voluptatibus molestiae iure, beatae placeat laudantium non explicabo earum nesciunt nostrum adipisci consequatur amet</p>
					</div>
				</div>
			</div>
		</section>
		<!--FIN COBIT-->

		<!-- CONTACTO -->
		<section class="conclusiones" id="conclusiones">
			<div class="datos parallax">
				<div class="overlay">					
				</div>
				<div class="container">					
					<div class="blurb">
						<h3>Conclusiones</h3>
						<p>Aqui están las conclusiones<br>Vmt</p>
					</div>	
				</div>
			</div>			
		</section>
		<!-- FIN CONTACTO -->
	</section>
<!-- FIN MAIN -->

<!-- PIE DE PAGINA -->
	<footer>
		<p class="copyright">Todos los derechos reservados</p>
		<div class="bottom-redes">
				<a href="#">
					<i class="fab fa-facebook"></i>
				</a>				
			</div>
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
