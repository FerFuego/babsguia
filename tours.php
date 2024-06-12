<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-4.php");
require_once("cpanel/class-5.php");
require_once("cpanel/class-cadena.php");
?>
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
								<li><a href="tours.php">Español</a></li>
								<li>|</li>
								<li><a href="tours_eng.php">Inglés</a></li>
							</ul>
						</nav><br>
		                <h2>Nuestros <span class="highlight"><strong>Tours</strong></span></h2>
		                <!--<h5><em>Disponemos de muy buenas opciones de Hoteles, Departamentos, Bed and Breakfast, Apart Hoteles, Hoteles Boutique y Hostels en ciudad de Buenos Aires.Haremos la búsqueda de acuerdo a sus necesidades, teniendo en cuenta: punto de interés, zona, servicios, categoría, tipo de alojamiento y forma de pago.</em></h5>-->
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
		            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		            		<iframe width="740" height="480" src="https://www.youtube.com/embed/TkhxV01QNa0" frameborder="0" allowfullscreen></iframe>
		            		<h2>BUENOS AIRES - ARGENTINA - CITY TOUR BabsGuia.com</h2>
		            	</div>
		            </div> 		                
		        </div>
		    </div>
	        <div class="container-fluid">
	        	<div class="section-header">
	                <h2>PASEOS <span class="highlight"><strong> GUIADOS</strong></span></h2>
	                <h5><em>Privados, Personalizados</em></h5>
	                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
	                <p class="text-center">¡De la mano de BabsGuia sienta nuestra ciudad!</p>
					<h4>Conozca nuestra gente “Los Porteños”, nuestra cultura, costumbres, vida cotidiana, actividades, pensamientos y más...</h4>
					<p>A su disposición Guía + Transporte + Chofer o solo Guía.<br>
					Visite los atractivos más emblemáticos de nuestra hermosa Ciudad.</p>
	            </div>
				<?php $fragment = parse_url($_SERVER["REQUEST_URI"], PHP_URL_FRAGMENT); print_r($fragment); ?>
				<div class="row" role="tabpanel"> <!-- row -->
					<div class="col-xs-12 col-md-3">
						<ul class="features nav nav-pills nav-stacked" role="tablist">
							<li role="presentation" id="tours-presenciales">
								<a href="#tours-presenciales" aria-controls="f1" role="tab" data-toggle="tab" onclick="applyFilter('tours-presenciales')">
									<span class="fa fa-subway"></span>
									Tours Presenciales<br><small>Face-to-face tours</small>
								</a>
							</li>
							<li role="presentation" id="experiencias-presenciales"> 
								<a href="#experiencias-presenciales" aria-controls="f2" role="tab" data-toggle="tab" onclick="applyFilter('experiencias-presenciales');">
									<span class="fa fa-map"></span>
									Experiencias presenciales<br><small>Face-to-face experiences</small>
								</a>
							</li>
							<li role="presentation" id="tours-virtuales"> 
								<a href="#tours-virtuales" aria-controls="f3" role="tab" data-toggle="tab" onclick="applyFilter('tours-virtuales');">
									<span class="fa fa-picture-o"></span>
									Tours y Experiencias virtuales<br><small>Virtual Tours and Virtual Experience</small>
								</a>
							</li>
							<li role="presentation" id="circuitos-autoguiados">
								<a href="#circuitos-autoguiados" aria-controls="f4" role="tab" data-toggle="tab" onclick="applyFilter('circuitos-autoguiados');">
									<span class="fa fa-street-view"></span>
									Circuitos autoguiados<br><small>Self-guided circuits</small>
								</a>
							</li>
							<li role="presentation" id="otros-servicios-y-capacitacion">
								<a href="#otros-servicios-y-capacitacion" aria-controls="f5" role="tab" data-toggle="tab" onclick="applyFilter('otros-servicios-y-capacitacion');">
									<span class="fa fa-cubes"></span>
									Otros servicios y capacitación<br><small>Other services and training</small>
								</a>
							</li>
							<br><br>
						</ul>
					</div>
					<div class="col-xs-12 col-md-9">
						<?php
							$news = new Tour();
							$result= $news->get();
							$num_row = mysql_num_rows($result);
							if($num_row>0){
								while ($row=mysql_fetch_array($result)){
									$dir = $row['atributo3'];
									$grupo = strtolower(str_replace([' ','ó'],['-','o'],$row['atributo17']));
									$array = glob("$dir{*.gif,*.JPG,*.jpg,*.jpeg,*.png}", GLOB_BRACE);
									echo'<div class="col-xs-12 col-md-4 arreglo_altura filter '.$grupo.'">
											<div class="item">
												<div class="pic">
												<a href="ver-tour.php?nid='.$row['id_tour'].'">
													<figure><img src="'.$array[0].'" class="img-responsive"></figure>
													<div class="hover-effect">
														<div class="iconolink">
															<img src="img/logo-xs.png">
														</div>
													</div>
												</a>
												</div>
											<p class="mini-descrip"><b>'.$row['atributo2'].'</b><br><i>'.Cadena::corta($row['atributo4'],140).'...</i></p>
										</div>
									</div>';
								}
							}else{
								echo"<br><div class='alert alert-success'> 0 publicaciones!</div>";
							}
						?>
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