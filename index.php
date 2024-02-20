<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="shorcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" href="fontawesome-5.10.2/css/all.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600i,700&display=swap" rel="stylesheet">
	<title>AWS Ingenieria</title>
</head>
<body>
	<header class="header">
		<div class="hero" id="hero">
			<div class="container">
				<div class="contenedor-logo">
					<img class="nav-logo" src="img/logot.png" alt="Logo Aws Ingenieria">
				</div>
				<div class="contenedor-btn">
					<button class="down" id="down"><i class="fas fa-angle-down"></i></button>
				</div>
			</div>
			
		</div>
		<nav class="navbar" id="navbar">
            <img src="img/logot.png" alt="Logo Aws Ingenieria" class="nav-logo">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link" id="top" >Top</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="quienes-somos" data-lang="quienes-somos">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="servicios" data-lang="servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="proyectos" data-lang="proyectos">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="contacto" data-lang="contacto">Contacto</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
	</header>

	<section class="main">
		<div class="loader" id="loader"></div>
		<a class='flotante' href='#' id="translate" data-text="Eng,Esp" data-file="es,en" data-index="1">Eng</a>
		<div class="quienes-somos" id="quienes">
			<div class="text">
				<h2 data-lang="quienes-somos">Quienes Somos</h2>
				<h3 data-lang="quienes" >Somos una empresa de ingeniería con amplia experiencia en el desarrollo de proyectos de estructuras y en construcciones civiles de todo tipo.</h3>
			</div>
			
			<div class="thumbs">
				<div class="thumb">
					<img src="img/4.jpg" alt="Obra" >
				</div>
				<div class="thumb">
					<img src="img/10.jpg" alt="Estructura" >
				</div>	
				<div class="thumb">
					<img src="img/1.jpg" alt="Edificio" >
				</div>
			</div>
			
		</div>

		<div class="servicios"  id="serv">
			<h2 data-lang="nuestros-servicios" >Nuestros Serivicios</h2>

			<div class="service-container2">

				<div class="service">
					<div class="icon">
						<i class="fas fa-square-root-alt"></i>
					</div>
					<div class="text">
						<h5 data-lang="diseno" >Diseño y cálculo estructural</h5>
						<p data-lang="servicio1" >Realizamos proyectos de diversas tipologías estructurales,  en concreto reforzado y acero estructural para edificios de oficinas, departamentos, hoteles, cubiertas de acero y fabricas.</p>
					</div>
				</div>

				<div class="service">
					<div class="icon">
						<i class="fas fa-building"></i>
					</div>
					<div class="text">
						<h5 data-lang="revision" >Revisiones estructurales</h5>
						<p data-lang="servicio2" >Realizamos las revisiones necesarias en estructuras construidas para asegurar la estabilidad de las mismas.</p>
					</div>
				</div>

				<div class="service">
					<div class="icon">
						<i class="fas fa-pencil-ruler"></i>
					</div>
					<div class="text">
						<h5 data-lang="consultoria" >Consultoría</h5>
						<p data-lang="servicio3" >En la realizacion de proyectos multidisciplinarios asesoramos en relacion a la parte estructural, tanto en el diseño como en la construccion.</p>
					</div>
				</div>

				<div class="service">
					<div class="icon">
						<i class="fas fa-hard-hat"></i>
					</div>
					<div class="text">
						<h5 data-lang="supervision" >Supervisión</h5>
						<p data-lang="servicio4" >Durante la construccion de la obra llevamos el control del avance de obra, control de calidad de los materiales y las respectivas nóminas de personal.</p>
					</div>
				</div>
			</div>

			<div class="lista-garantias">
				
				<div class="list left">
					<ul>
						<li data-lang="lista6">Precios competitivos</li>
						<li data-lang="lista7">Total transparencia en la contratación</li>
						<li data-lang="lista8">Entregas a tiempo</li>
					</ul>
				</div>
				<div class="list right">
					<ul>
						<li data-lang="lista9">Usamos sólo Software original</li>
						<li data-lang="lista11">Siempre en contacto, sin complicaciones</li>
						<li data-lang="lista10">Amplia experiencia</li>
					</ul>
				</div>
				
			</div>

		</div>

		<div class="proyectos"  id="proy">
			<h2 data-lang="proyectos" >Proyectos</h2>

			<div class="card">
				<input type="radio" name="select" id="slide_1" checked>
				<input type="radio" name="select" id="slide_2">
				<input type="radio" name="select" id="slide_3">
				<!-- <input type="checkbox" id="slideImg"> -->

				

				<div class="inner_part">
					<label for="slideImg" class="img">
						<img class="img_1" src="img/6.jpg">
					</label>
					<div class="content content_1">
						<div class="title">
							<h4 data-lang="card-title1" >Tanques de almacenamiento de aguas servidas para planta de tratamiento</h4>
						</div>
						<div class="text">
							<p data-lang="ubicacion1" >Ubicación: Tintorería industrial Gustav Mueller, Caracas, Venezuela</p>
							<p data-lang="cliente1" >Cliente: Tintorería industrial Gustav Mueller</p>
							<p data-lang="desc1" >Tanques en concreto armado. Capacidad de 100000 litros.</p>
						</div>
						
					</div>
				</div>

				<div class="inner_part">
					<label for="slideImg" class="img">
						<img class="img_2" src="img/1.jpg">
					</label>
					<div class="content content_2">
						<div class="title">
							<h4 data-lang="card-title2">Edificio industrial La Fe</h4>
						</div>
						<div class="text">
							<p data-lang="ubicacion2" >Ubicación: Ubicación: Zona industrial La Fe. Macarao, Venezuela.</p>
							<p data-lang="cliente2" >Cliente: Cliente: Telares David Yarn</p>
							<p data-lang="desc2" >Edificio en estructura de concreto armado 1000 m² por planta.</p>
						</div>
						
					</div>
				</div>

				<div class="inner_part">
					<label for="slideImg" class="img">
						<img class="img_3" src="img/9.jpg">
					</label>
					<div class="content content_3">
						<div class="title">
							<h4 data-lang="card-title3" >Muro de protección de inundación</h4>
						</div>
						<div class="text">
							<p data-lang="ubicacion3" >Ubicación: Ubicación: Río Guatire, Guatire, Venezuela.</p>
							<p data-lang="cliente3" >Cliente: Arpitex C.A.</p>
							<p data-lang="desc3" >Muro en concreto armado para protección de crecidas del río Guatire.</p>
						</div>
						
					</div>
				</div>

				<div class="slider">
					<label for="slide_1" class="slide slide_1"></label>
					<label for="slide_2" class="slide slide_2"></label>
					<label for="slide_3" class="slide slide_3"></label>
				</div>
			</div>
		</div>

		<div class="contacto"  id="cont">
			<div class="text">
				<h2 data-lang="contacto" >Contacto</h2>
				<h3 data-lang="escribenos" >Escríbenos y nos pondremos en contacto contigo</h3>
			</div>
			<div class="container">
				<div class="contactos">
					<!-- <h4 data-lang="contactanos">Contáctanos</h4> -->
					<p class="telefono" data-lang="telefono"><i class="fas fa-phone-alt"></i> +58-424-1183649</p>
					<p class="mail"><i class="fas fa-envelope"></i> awsingenieria@yahoo.com</p>
					<p class="linkedin"><a href="https://www.linkedin.com/in/gustavo-marquez-acosta-4a35a719" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i>  Linkedin</a></p>

				</div>
				<!-- <div class="redes">
					<h4 data-lang="siguenos">Síguenos</h4>
					<p>Linkedin</p><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
				</div> -->
				<div class="form-container">
					<?php require 'formulario.php'; ?>
					<form class="formulario" method="post" id="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<input type="text" class="nombre" placeholder="Nombre" name="nombre" id="nombre" >
						<input type="email" class="correo" placeholder="Correo" name="correo" id="correo" >
						<input type="text" class="asunto" placeholder="Asunto" name="asunto" id="asunto">
						<textarea class="mensaje" placeholder="Mensaje" name="mensaje" id="mensaje" ></textarea>
						<ul class="error" id="error"></ul>
						<?php if($enviado): ?>
							<div id="succes" class="succes">
								<p><i class="fas fa-check-double"></i></p>
							</div>
						<?php endif ?>
						<?php if($exc): ?>
							<div id="exc" class="error">
								<p data-lang="exc" >Algo salió mal, intente más tarde</p>
							</div>
						<?php endif ?>
						<input class="btn" id="enviar" type="submit" name="submit" value="Enviar">
					</form>
				</div>	
			</div>
			
		</div>
	</section>
	<section class="footer">
		<div class="copyright">
			<p data-lang="copyright" >© 2019 AWS Ingenieria</p>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/main.js"></script>
</body>
</html>