<!doctype html>
<html lang="es" class="no-js">
<head>
	<?php require_once("php/head.php");?>
</head>
<body>
	<div class="cd-secondary-nav-2">
		<?php require_once("php/nav-biz.php");?>
	</div>
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			 <div id="tf-services">
		        <div class="container">
		            <div class="section-header">
		            	<nav class="pull-right idioma">
							<ul>
								<li><a href="contacto.php">Español</a></li>
								<li>|</li>
								<li><a href="contacto_eng.php">Inglés</a></li>
							</ul>
						</nav><br>
		                <h2><span class="highlight"><strong>CONTÁCTENOS</strong></span></h2>
		                <h5><em>Envíenos su consulta, le responderemos a la brevedad.</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
		            	<p></p>
		            </div> 		                
		        </div>
		    </div>
	     	<div class="container">
	            <div class="row">
	            	<div class="col-xs-12 hidden-sm-12 col-md-4 col-lg-4">
	            		<ul>
	            			<li><label>E-MAIL:</label> turismo@babsguia.com</li><br>
	            			<li><label>MSN:</label> b_guia@hotmail.com</li><br>
	            			<li><label>TELÉFONO:</label> (54 11) 3981-4501<br>
						Lunes a Viernes de 10 a 13hs. y 15:30 a 18:30hs.</li><br>
	            			<li><label>FAX:</label> (54 11) 4553 2390</li><br>
	            			<li><label>FORMULARIO:</label> Complete la siguiente solicitud de contacto.</li>
	            		</ul>
	            	</div>
	            	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	            		<form action="php/send-contacto.php" method="POST">
		            		<dl class="dl-horizontal">
							  	<dt class="text-warning">Nombre y Apellido:</dt>
							  	<dd><input type="text" name="nombre" class="form-control" required></dd>
							  	<dt class="text-warning">País de Residencia:</dt>
							  	<dd><input type="text" name="direccion" class="form-control" required></dd>
							  	<dt class="text-warning">Email:</dt>
							  	<dd><input type="text" name="email" class="form-control" required></dd>
							  	<dt class="text-warning">Nº de Teléfono:</dt>
							  	<dd><input type="text" name="telefono" class="form-control" required></dd>
							  	<dt class="text-warning">Cantidad de pasajeros:</dt>
							  	<dd><input type="number" name="cantidad" class="form-control" required></dd>
							  	<dt class="text-warning">Tipo de Tour, Servicio o Producto:</dt>
							  	<dd><select name="tipo" class="form-control" required>
							  		<option value="CityTours">City Tours</option>
							  		<option value="ToursTematicos">Tours Temáticos</option>
							  		<option value="OtrosTours">Otros Tours</option>
							  		<option value="Destacados">Destacados</option>
							  		<option value="VisitaGuiada">Visita Guiada</option>
							  		<option value="TourSobreRieles">Tour Sobre Rieles</option>
							  		<option value="WalkingTour">Walking Tour</option>
							  		<option value="UnaMiradaDiferente">Una Mirada Diferente</option>
							  		<option value="Productos">Productos</option>
							  		<option value="Servicios">Servicios</option>
							  		<option value="Publicidad">Publicidad</option>
							  		<option value="Novedades">Novedades</option>
							  	</select></dd>
							  	<dt class="text-warning">Fecha:</dt>
							  	<dd><input type="text" name="fecha" class="form-control" placeholder="dd/mm/aaaa" required></dd>
							  	<dt class="text-warning">Mensaje:</dt>
							  	<dd><textarea name="mensaje" class="form-control" required></textarea></dd>
							  	<dt class="text-warning">Cómo conoció a babsguia?:</dt>
							  	<dd><input type="text" name="como" class="form-control" required></dd>	
							  	<input type="hidden" name="verif" class="form-control">
							</dl>
							<dl class="dl-horizontal">
								<dt></dt>
								<dd><input type="submit" class="btn btn-warning" value="Enviar Formulario"></dt>
							</dl>	
		            	</form>
	            	</div>
	            </div>
	        </div>
	        <div class="container">
	        	<div class="section-header">
	                <h2>ASESORAMIENTO <span class="highlight"><strong> TURÍSTICO</strong></span> VIA INTERNET</h2>
	                <h5><em>Nuestros pasajeros podrán tener en forma inmediata, Asesoramiento y Orientación Turística, acerca de Buenos Aires y otros destinos turísticos de Argentina.
Como ser: Hoteles, Departamentos, Restaurantes, Espectáculos, Museos, Conciertos, Ballet, Obras de Teatro, Exposiciones, lugares de interés cultural para ser visitados, Tours Privados y Regulares, Servicio de Guía de Turismo, etc.</em></h5>
	                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div> 
	            </div>
	            <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col col-md-offset-2 col-lg-4 col col-lg-offset-2">
                        <div class="about-left-content text-center">
                            <div class="img-wrap"> 
                                <div class="profile-img"> 
                                	<br><br>
                                    <a href="folleto/folleto.pdf" target="_blank" title="ver folletos"><img src="img/folletos.png" class="img-responsive" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-right-content"> 
                			<div class="text-center">
                				<br><br><br><br>
                            	<h2><span class="small"> Consejeros en Cityadvisor</span> <span class="small"></span></h2>
			                	<a href="http://www.cityadvisor.info/advisor.advisor#!advisor=@845&geo=@114236" target="_blank" class="btn btn-primary tf-btn color">Ver más</a>
			            	</div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
	</main>
<footer>
	<?php require_once("php/footer.php");?>
</footer>
</body>
</html>