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
								<li><a href="reserva.php">Español</a></li>
								<li>|</li>
								<li><a href="reserva_eng.php">Inglés</a></li>
							</ul>
						</nav><br>
		                <h2>FORMULARIO DE <span class="highlight"><strong>Reserva</strong></span></h2>
		                <h5><em>Una vez solicitado el Tour, Servicio o Producto; por favor, complete el formulario de reserva para su seguridad y la de nuestra Firma. <br>Muchas Gracias !</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
		            	<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2">
		            	<form action="send-reserva.php" method="POST">
		            		<dl class="dl-horizontal">
				  				<dt class="text-warning">TOUR | PRODUCTO | SERVICIO:</dt>
							  	<dd><input type="text" name="tipo" class="form-control" required></dd>
							  	<dt class="text-warning">Nombre y Apellido:</dt>
							  	<dd><input type="text" name="nombre" class="form-control" required></dd>
							  	<dt class="text-warning">Sexo:</dt>
							  	<dd><select name="sexo" class="form-control" required>
							  		<option value=""></option>
							  		<option value="Masculino">Masculino</option>
							  		<option value="Femenino">Femenino</option>
							  	</select></dd>
							  	<dt class="text-warning">Email:</dt>
							  	<dd><input type="text" name="email" class="form-control" required></dd>
							  	<dt class="text-warning">Dirección en su País:</dt>
							  	<dd><input type="text" name="direccion" class="form-control" required></dd>
							  	<dt class="text-warning">Nacionalidad:</dt>
							  	<dd><input type="text" name="nacionalidad" class="form-control" required></dd>
							  	<dt class="text-warning">Fecha de Nacimiento:</dt>
							  	<dd><input type="text" name="nacimiento" class="form-control" placeholder="dd/mm/aaaa" required></dd>
							  	<dt class="text-warning">Profesión, Empresa o Universidad:</dt>
							  	<dd><input type="text" name="profesion" class="form-control" required></dd>
								<dt class="text-warning">Dirección de Empresa o Universidad:</dt>
							  	<dd><input type="text" name="empresa" class="form-control" required></dd>
							  	<dt class="text-warning">Nro. de Pasaporte:</dt>
							  	<dd><input type="text" name="pasaporte" class="form-control" required></dd>
							  	<dt class="text-warning">Detalles del vuelo:</dt>
							  	<dd><input type="text" name="vuelo" class="form-control" required></dd>
							  	<dt class="text-warning">Dirección de Alojamiento:</dt>
							  	<dd><input type="text" name="alojamiento" class="form-control" required></dd>
							  	<dt class="text-warning">Nº de Habitación:</dt>
							  	<dd><input type="text" name="habitacion" class="form-control" required></dd>
							  	<dt class="text-warning">Nº de Teléfono:</dt>
							  	<dd><input type="text" name="telefono" class="form-control" required></dd>
							  	<dt class="text-warning">Cantidad de pasajeros:</dt>
							  	<dd><input type="text" name="cantidad" class="form-control" required></dd>
							  	<dt class="text-warning">Cómo conoció a babsguia?:</dt>
							  	<dd><input type="text" name="como" class="form-control" required></dd>	
							</dl>
							<h6>DIRECCIÓN EN CASO DE EMERGENCIA</h6>
							<dl class="dl-horizontal">
								<dt class="text-warning">Nombre y Apellido:</dt>
							  	<dd><input type="text" name="nomb-emerge" class="form-control" required></dd>	
							  	<dt class="text-warning">Email:</dt>
							  	<dd><input type="text" name="email-emerg" class="form-control" required></dd>	
							  	<dt class="text-warning">Teléfono:</dt>
							  	<dd><input type="text" name="tel-emerg" class="form-control" required></dd>	
							</dl>
							<dl class="dl-horizontal">
								<dt></dt>
								<dd><input type="submit" class="btn btn-warning" value="Enviar Formulario"></dt>
							</dl>	
		            	</form>
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