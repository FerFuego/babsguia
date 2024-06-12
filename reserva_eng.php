<!doctype html>
<html lang="es" class="no-js">
<head>
	<?php require_once("php/head.php");?>
</head>
<body>
	<div class="cd-secondary-nav-2">
		<?php require_once("php/nav-biz-eng.php");?>
	</div>
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			 <div id="tf-services">
		        <div class="container">
		            <div class="section-header">
		            	<nav class="pull-right idioma">
							<ul>
								<li><a href="reserva.php">Spanish</a></li>
								<li>|</li>
								<li><a href="reserva_eng.php">English</a></li>
							</ul>
						</nav><br>
		                <h2>RESERVATION<span class="highlight"><strong>FORM</strong></span></h2>
		                <h5><em>Once you requested the Tour , service or product ; Please complete the booking form for your safety and that of our firm .<br>Thank you so much!</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
		            	<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2">
		            	<form action="send-reserva.php" method="POST">
		            		<dl class="dl-horizontal">
				  				<dt class="text-warning">TOUR | PRODUCTS | SERVICES:</dt>
							  	<dd><input type="text" name="tipo" class="form-control" required></dd>
							  	<dt class="text-warning">Name and Last name:</dt>
							  	<dd><input type="text" name="nombre" class="form-control" required></dd>
							  	<dt class="text-warning">Sex:</dt>
							  	<dd><select name="sexo" class="form-control" required>
							  		<option value=""></option>
							  		<option value="Masculino">Male</option>
							  		<option value="Femenino">Female</option>
							  	</select></dd>
							  	<dt class="text-warning">Email:</dt>
							  	<dd><input type="text" name="email" class="form-control" required></dd>
							  	<dt class="text-warning">Address in your Country:</dt>
							  	<dd><input type="text" name="direccion" class="form-control" required></dd>
							  	<dt class="text-warning">Nationality:</dt>
							  	<dd><input type="text" name="nacionalidad" class="form-control" required></dd>
							  	<dt class="text-warning">Birthdate:</dt>
							  	<dd><input type="text" name="nacimiento" class="form-control" placeholder="dd/mm/aaaa" required></dd>
							  	<dt class="text-warning">Profession, Company or University:</dt>
							  	<dd><input type="text" name="profesion" class="form-control" required></dd>
								<dt class="text-warning">Company or University Address:</dt>
							  	<dd><input type="text" name="empresa" class="form-control" required></dd>
							  	<dt class="text-warning">Passport Number:</dt>
							  	<dd><input type="text" name="pasaporte" class="form-control" required></dd>
							  	<dt class="text-warning">Flight Details:</dt>
							  	<dd><input type="text" name="vuelo" class="form-control" required></dd>
							  	<dt class="text-warning">Accommodation Address:</dt>
							  	<dd><input type="text" name="alojamiento" class="form-control" required></dd>
							  	<dt class="text-warning">Room Number:</dt>
							  	<dd><input type="text" name="habitacion" class="form-control" required></dd>
							  	<dt class="text-warning">Phone Number:</dt>
							  	<dd><input type="text" name="telefono" class="form-control" required></dd>
							  	<dt class="text-warning">Ridership:</dt>
							  	<dd><input type="text" name="cantidad" class="form-control" required></dd>
							  	<dt class="text-warning">How he met babsguia?:</dt>
							  	<dd><input type="text" name="como" class="form-control" required></dd>	
							</dl>
							<h6>EMERGENCY MANAGEMENT</h6>
							<dl class="dl-horizontal">
								<dt class="text-warning">Name and Last Name:</dt>
							  	<dd><input type="text" name="nomb-emerge" class="form-control" required></dd>	
							  	<dt class="text-warning">Email:</dt>
							  	<dd><input type="text" name="email-emerg" class="form-control" required></dd>	
							  	<dt class="text-warning">Phone:</dt>
							  	<dd><input type="text" name="tel-emerg" class="form-control" required></dd>	
							</dl>
							<dl class="dl-horizontal">
								<div class="g-recaptcha" data-sitekey="6LfqdvcpAAAAANT3xmFOcyGeuQRSgweX0L3gxvYH"></div>
							</dl>
							<dl class="dl-horizontal">
								<dt></dt>
								<dd><input type="submit" class="btn btn-warning" value="Send Form"></dt>
							</dl>	
		            	</form>
		            	</div>
		            </div> 		                
		        </div>
		    </div>
		</section>
	</main>
<footer>
	<?php require_once("php/footer_eng.php");?>
</footer>
</body>
</html>