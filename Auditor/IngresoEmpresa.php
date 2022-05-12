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
      ?>	
<body>
	<!-- ENCABEZADO -->
	<header>
		<div class="menu-bar-pc" style="padding:0 12.25rem">
			<nav class="menu-principal">
				<a href="#" class="volver-arriba">Inicio</a>
				<a href="#evaluacion" class="scroll-suave">Guia de Evaluación</a>
				<a href="#elementos" class="scroll-suave">Ingreso de Elementos</a>
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
				    <a href="#elementos" class="scroll-suave">Ingreso de Elementos</a>
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
				<div class="foto izq lightbox">
					<div class="overlay">
						<i class="fas fa-plus"></i>
					</div>
				</div>
				<div class="texto">
					<h2>Mejor calidad</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non sit aut ullam eos commodi ducimus aspernatur facilis nisi velit, fuga praesentium natus, eveniet eaque quibusdam est consequatur autem necessitatibus at!</p>			
				</div>
				<div class="foto-full izq lightbox">
					<div class="overlay">
						<i class="fas fa-plus"></i>
					</div>
				</div>
			</div>

			<div class="col">
			<div class="foto-full der lightbox">
					<div class="overlay">
						<i class="fas fa-plus"></i>
					</div>
				</div>

				<div class="foto der lightbox">
					<div class="overlay">
						<i class="fas fa-plus"></i>
					</div>
				</div>
				<div class="texto">
					<h2>Mejor calidad</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non sit aut ullam eos commodi ducimus aspernatur facilis nisi velit, fuga praesentium natus, eveniet eaque quibusdam est consequatur autem necessitatibus at!</p>	
				</div>
			</div>		
		</section>
		<!-- FIN PORTADA -->

		<!-- NOSOTROS -->
		<section class="nosotros" id="nosotros">
			<div class="container">
				<div class="col izq">
					<div class="titulo-seccion">
						<p>Nosotros</p>
						<h2>Conocenos</h2>
					</div>
				</div>
				<div class="col der">
					<div class="texto">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi amet, at iure perferendis, sequi modi et sunt quibusdam, id rerum quia nesciunt ipsa ex alias laudantium corrupti facere tempora sed.Assumenda odit, sunt voluptatibus molestiae iure, beatae placeat laudantium non explicabo earum nesciunt nostrum adipisci consequatur amet, voluptatum laborum aspernatur autem architecto quae dicta rem quisquam nemo repellat. Explicabo eaque magni asperiores libero ut expedita, voluptatibus cum ipsum harum a, molestiae hic! Debitis ab perspiciatis sequi, unde, ducimus, dolorum voluptates expedita commodi nisi, quos excepturi consectetur cupiditate odit cum.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- NOSOTROS -->

		<!-- NUESTRO CHEF -->
		<section class="chef" id="chef">
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
						<h2>Nuestro chef</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, fuga.</p>
						<p>Blanditiis assumenda odit, sunt voluptatibus molestiae iure, beatae placeat laudantium non explicabo earum nesciunt nostrum adipisci consequatur amet</p>
					</div>
				</div>
			</div>
		</section>
		<!--FIN NUESTRO CHEF -->

		<!-- NUESTRO MENU -->
		<section id="nuestro_menu"  class="menu-platos">
			<div class="container">
				<div class="titulo-seccion">
					<h2>Nuestro menú</h2>
				</div>
				<div class="contenedor-menu">
					<ul id="encabezado_menu" class="encabezado">
						<li><a href="#postres">Postres</a></li>
						<li><a href="#cafes">Cafés</a></li>
					</ul>
					<div class="contenido" id="contenido_menu">
						<!-- Menu Postres -->
						<div id="postres">
							<div class="item">
								<div class="col izq">
									<h3>Lorem ipsum dolor.</h3>
									<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit.</p>
								</div>
								<div class="col der">
									<p class="precio">$15</p>
								</div>
							</div>

							<div class="item">
								<div class="col izq">
									<h3>Donec placerat dignissin.</h3>
									<p>Macenas iaculis aliquam lectus, coutywe.</p>
								</div>
								<div class="col der">
									<p class="precio">$17</p>
								</div>
							</div>

							<div class="item">
								<div class="col izq">
									<h3>Nulla vestibulum.</h3>
									<p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit.</p>
								</div>
								<div class="col der">
									<p class="precio">$21</p>
								</div>
							</div>

							<div class="item">
								<div class="col izq">
									<h3>Sed semper.</h3>
									<p> Voluptatibus magni amet laborum tenetur, eaque unde.</p>
								</div>
								<div class="col der">
									<p class="precio">$20</p>
								</div>
							</div>
						</div>
					<!-- FIN Menu postres -->

					<!-- Menu cafés -->

					<div id="cafes">
						<div class="item">
							<div class="col izq">
								<h3>Cafe ipsum dolor</h3>
								<p>Ut sunt veniam praesentium illum possimus autem eaque est quod labore error.Totam dolorum veritatis dignissimos placeat voluptates.</p>
							</div>
							<div class="col der">
								<p class="precio">$4</p>
							</div>
						</div>

						<div class="item">
							<div class="col izq">
								<h3>Late dignissim</h3>
								<p>Aliquid beatae explicabo at officiis corrupti libero nemo alias molestiae.Ducimus similique dolor, perferendis pariatur omnis. </p>
							</div>
							<div class="col der">
								<p class="precio">$6</p>
							</div>
						</div>

						<div class="item">
							<div class="col izq">
								<h3>Capuccino vestibulum</h3>
								<p>Quos necessitatibus deserunt laudantium, tempora quibusdam? Maxime maiores consectetur aliquam Aliquid beatae explicabo at officiis corrupti libero nemo alias molestiae perferendis.</p>
							</div>
							<div class="col der">
								<p class="precio">$5</p>
							</div>
						</div>

						<div class="item">
							<div class="col izq">
								<h3>Cafe semper</h3>
								<p>Pariatur omnis, quos necessitatibus deserunt laudantium, tempora quibu.explicabo at officiis corrupti libero nemo alias molestiae perferendis.</p>
							</div>
							<div class="col der">
								<p class="precio">$8</p>
							</div>
						</div>
					</div> 
					<!-- FIN Menu cafés -->
					</div>
				</div>
			</div>
		</section>
		<!-- FIN NUESTRO MENU  -->

		<!-- CONTACTO -->
		<section class="contacto" id="contacto">
			<div class="datos parallax">
				<div class="overlay">
					
				</div>
				<div class="container">
					<div class="blurb">
						<h3>Escribenos</h3>
						<p>correo@correo.com</p>
					</div>
					<div class="blurb">
						<h3>Visitanos</h3>
						<p>Av.Santa rosa n°120<br>Vmt</p>
					</div>
					<div class="blurb">
						<h3>Horarios</h3>
						<p>Martes a Domingo<br>11am - 9pm</p>
					</div>
				</div>
			</div>
			<div class="formulario">
				<form action="" class="formulario_contacto" name="formulario_contacto">
					<div>
						<div class="input-group">
							<input type="text" id="nombre" name="nombre">
							<label class="label" for="nombre">Nombre</label>
						</div>

						<div class="input-group">
							<input type="email" id="email" name="email">
							<label class="label" for="email">Correo electrónico</label>
						</div>

						<div class="input-group">
							<textarea name="mensaje" id="mensaje"></textarea>
							<label class="label" for="nombre">Mensaje</label>
						</div>

						<input type="submit" value="Enviar">
					</div>
				</form>
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
				<a href="#">
					<i class="fab fa-twitter"></i>
				</a>
				<a href="#">
					<i class="fab fa-instagram"></i>
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
