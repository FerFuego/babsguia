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
								<li><a href="contacto.php">Spanish</a></li>
								<li>|</li>
								<li><a href="contacto_eng.php">English</a></li>
							</ul>
						</nav><br>
		                <h2><span class="highlight"><strong>CONTECT US</strong></span></h2>
		                <h5><em>Send us your inquiry, we respond promptly.</em></h5>
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
	            			<li><label>PHONE:</label> (54 11) 3981-4501<br>
	            			Monday through Friday 10 am to 13 pm. and 15:30 pm to 18:30 pm</li><br>
	            			<li><label>FAX:</label> (54 11) 4553 2390</li><br>
	            			<li><label>FORM:</label> Complete the following contact request.</li>
	            		</ul>
	            	</div>
	            	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
	            		<form action="php/send-contacto-eng.php" method="POST">
		            		<dl class="dl-horizontal">
							  	<dt class="text-warning">Name and Last name:</dt>
							  	<dd><input type="text" name="nombre" class="form-control" required></dd>
							  	<dt class="text-warning">Country of Residence:</dt>
							  	<dd><input type="text" name="direccion" class="form-control" required></dd>
							  	<dt class="text-warning">Email:</dt>
							  	<dd><input type="text" name="email" class="form-control" required></dd>
							  	<dt class="text-warning">Phone Number:</dt>
							  	<dd><input type="text" name="telefono" class="form-control" required></dd>
							  	<dt class="text-warning">Ridership:</dt>
							  	<dd><input type="number" name="cantidad" class="form-control" required></dd>
							  	<dt class="text-warning">Tour Type, Service or Product:</dt>
							  	<dd><select name="tipo" class="form-control" required>
							  		<option value="CityTours">City Tours</option>
							  		<option value="ThematicTours">Thematic Tours</option>
							  		<option value="OtherTours">Other Tours</option>
							  		<option value="Highlights">Highlights</option>
							  		<option value="Guidedvisit">Guided visit</option>
							  		<option value="TourOnRails">Tour On Rails</option>
							  		<option value="Walking Tour">Walking Tour</option>
							  		<option value="Adifferentlook">A different look</option>
							  		<option value="Products">Products</option>
							  		<option value="Services">Services</option>
							  		<option value="Publicity">Publicity</option>
							  		<option value="News">News</option>
							  	</select></dd>
							  	<dt class="text-warning">Date:</dt>
							  	<dd><input type="text" name="fecha" class="form-control" placeholder="dd/mm/aaaa" required></dd>
							  	<dt class="text-warning">Messages:</dt>
							  	<dd><textarea name="mensaje" class="form-control" required></textarea></dd>
							  	<dt class="text-warning">How he met babsguia?:</dt>
							  	<dd><input type="text" name="como" class="form-control" required></dd>	
							  	<input type="hidden" name="verif" class="form-control">
							</dl>
							<dl class="dl-horizontal">
								<dt></dt>
								<dd><input type="submit" class="btn btn-warning" value="Send Form"></dt>
							</dl>	
		            	</form>
	            	</div>
	            </div>
	        </div>
	        <div class="container">
	        	<div class="section-header">
	                <h2>TOURIST <span class="highlight"><strong> ADVICE</strong></span> VIA INTERNET</h2>
	                <h5><em>Our passengers will immediately have Tourist Advice and Guidance about Buenos Aires and other tourist places in Argentina.
For example: Hotels, Apartments, Restaurantes, Shows, Museums, Concerts, Ballet, Plays, Exhibitions, places of cultural interest to be visited, Private Tours and Group Tours, Tourist Guide Service, etc. </em></h5>
	                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div> 
	            </div>
	            <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col col-md-offset-2 col-lg-4 col col-lg-offset-2">
                        <div class="about-left-content text-center">
                            <div class="img-wrap"> 
                                <div class="profile-img"> 
                                	<br><br>
                                    <a href="folleto/folleto.pdf" target="_blank" title="see brochures"><img src="img/folletos.png" class="img-responsive" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-right-content"> 
                			<div class="text-center">
                				<br><br><br><br>
                            	<h2><span class="small"> Counselors Cityadvisor</span> <span class="small"></span></h2>
			                	<a href="http://www.cityadvisor.info/advisor.advisor#!advisor=@845&geo=@114236" target="_blank" class="btn btn-primary tf-btn color">see more</a>
			            	</div>
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