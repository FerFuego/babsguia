<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-1.php");
require_once("cpanel/class-2.php");
require_once("cpanel/class-cadena.php");
?>
<!doctype html>
<html lang="es" class="no-js">
<head>
	<?php require_once("php/head.php");?>
</head>
<body>
	<header class="cd-header">
		<?php require_once("php/header.php");?>
	</header>
	<section id="cd-intro">
		<div id="cd-intro-tagline">
			<h1 class="tituloIndex">Paseos Guiados Privados por Buenos Aires</h1>
			<a href="contacto.php" class="cd-btn tf-btn color">Contáctenos</a>
		</div>
	</section>

	<div class="cd-secondary-nav">
		<a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
		<nav>
			<?php require_once("php/nav.php");?>
		</nav>
	</div>
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			 <div id="tf-services">
		        <div class="container">
		            <div class="section-header">
		                <h2>Quienes <span class="highlight"><strong>somos</strong></span></h2>
		                <h5><em>Somos una reconocida empresa en Buenos Aires que provee el servicio de Guías de Turismo Profesionales Locales en diferentes idiomas. <br>
						Nuestra empresa posee más de 16 años de trayectoria y experiencia en el rubro. <br>
						El secreto de nuestro éxito es nuestro compromiso inquebrantable con el cliente, ofreciendo servicios de gran calidad.
						Para lograrlo, nos valemos de nuestra red de contactos, y de personal calificado, con el conocimiento y la habilidad para hacer que su visita por Buenos Aires sea un éxito.
						Organizamos tours privados (con o sin transporte) que hacen interesante y muy agradable el conocimiento de la ciudad de Buenos Aires.
						</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
		            	<div class="text-center">
		            		<h5><em>¿Por qué es importante contratar el servicio de un guía de turismo?</em></h5><br><br>
		            	</div>
		                <div class="col-md-6 text-right">
		                    <div class="media service">
		                        <div class="media-body">
		                            <h4 class="media-heading">Seguridad</h4>
		                            <p>Porque al hacerlo se están garantizando que la visita sea segura, interesante y agradable. </p>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="fa fa-unlock-alt"></i>
		                        </div>
		                    </div>

		                    <div class="media service">
		                        <div class="media-body">
		                            <h4 class="media-heading">Confianza</h4>
		                            <p>Porque podrán sentirse tranquilos al depositar su confianza en un profesional intérprete del lugar.</p>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="fa fa-child"></i>
		                        </div>
		                    </div>

		                    <div class="media service"> 
		                        <div class="media-body">
		                            <h4 class="media-heading">Saber en profundidad</h4>
		                            <p>Porque podrán ver con mayor minuciosidad y claridad cada detalle de la zona a través de las explicaciones y los sentimientos incluidos en su relato, ya que el Guía podrá contar la historia de cada ladrillo, adoquín y baldosa de la ciudad.</p>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="fa fa-sort-alpha-asc"></i>
		                        </div>
		                    </div>
		                </div> 

		                <div class="col-md-6">
		                    <div class="media service">
		                        <div class="media-left media-middle">
		                            <i class="fa fa-star"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4 class="media-heading">Experiencia</h4>
		                            <p>Le aseguramos una visita interesante, profesional, segura y amena.Nuestros Guías de Turismo están ampliamente capacitados y con experiencia para ayudar a los pasajeros en lo que necesiten.</p>
		                        </div>
		                    </div>

		                    <div class="media service">
		                        <div class="media-left media-middle">
		                            <i class="fa fa-life-ring"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4 class="media-heading">Ayuda ante Inconvenientes</h4>
		                            <p>Porque al interactuar con cada uno de los componentes del sistema turístico, el Guía posee la experiencia necesaria para ayudarlos en lo que necesiten, facilitándoles los medios para resolver los inconvenientes que pudieran producirse.</p>
		                        </div>
		                    </div>
		                     <div class="media service">
		                        <div class="media-left media-middle">
		                            <i class="fa fa-wheelchair"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4 class="media-heading">Nos adaptados a sus necesidades</h4>
		                            <p>Algunos de nuestros tours estàn adaptados para personas con capacidades diferentes.</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
            <div class="text-center">
                <a href="quienessomos.php" class="btn btn-primary tf-btn color">Saber más</a>
            </div>
		</section>

		<section id="cd-placeholder-2" class="cd-section cd-container">
			<div id="tf-features">
		        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
		            <div class="container"> <!-- container -->
		                <div class="row" role="tabpanel"> <!-- row -->
				        <div class="container">
				            <div class="section-header">
				                <h2>Vamos a lo que <span class="highlight"><strong>Sabemos</strong></span></h2>
				                <h5><em>Esto es lo que nos apasiona.</em></h5>
				                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
				            </div>
				        </div>
		                    <div class="col-md-4"> <!-- tab menu col 4 -->
		                        <ul class="features nav nav-pills nav-stacked" role="tablist">
		                            <li role="presentation" class="active">  <!-- feature tab menu #1 -->
		                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
		                                    <span class="fa fa-picture-o"></span>
		                                    Ciudad de Buenos Aires<br><small>city of Buenos Aires</small>
		                                </a>
		                            </li>
		                            <!--<li role="presentation"> 
		                                <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
		                                    <span class="fa fa-map"></span>
		                                    Visita Guiada<br><small>guided visit</small>
		                                </a>
		                            </li>
		                            <li role="presentation"> 
		                                <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
		                                    <span class="fa fa-subway"></span>
		                                     Tour sobre rieles<br><small>rail tour</small>
		                                </a>
		                            </li>-->
		                            <li role="presentation"> <!-- feature tab menu #4 -->
		                                <a href="#f5" aria-controls="f5" role="tab" data-toggle="tab">
		                                    <span class="fa fa-street-view"></span>
		                                     ¿Es importante un guía de turismo?<br><small>It is important a tour guide?</small>
		                                </a>
		                            </li>
		                            <li role="presentation"> <!-- feature tab menu #4 -->
		                                <a href="tours.php" class="fijo_estilo_tours" aria-controls="f4" >
		                                    <span class="fa fa-cubes"></span>
		                                     VER NUESTROS TOURS PRIVADOS<br><small>See our private tours</small>
		                                </a>
		                            </li>
									<li role="presentation"> <!-- feature tab menu #4 -->
		                                <a href="novedades-personalizadas.php" aria-controls="f5" >
		                                    <span class="fa fa-newspaper-o"></span>
		                                    NOVEDADES PERSONALIZADAS<br><small>Personalized news</small>
		                                </a>
		                            </li>
		                            <br><br>
		                        </ul>
		                    </div>

		                    <div class="col-md-8">
		                        <div class="tab-content features-content"> <!-- tab content wrapper -->
		                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
		                                <h4>Buenos Aires</h4>
		                                <p>Buenos Aires es una ciudad con personalidad propia, abierta a la arquitectura, la cultura y el arte de todo el mundo.
										Cosmopolita y contradictoria, dinámica y tradicional, histórica y vanguardista, despliega una inmensa gama de atractivos: monumentos, iglesias, museos, galerías de arte y teatros; plazas, parques y jardines con arboledas añosas; barrios característicos; amplios centros comerciales, hoteles tradicionales y modernos, restaurantes típicos y de cocina internacional.
										Las dimensiones de Buenos Aires obligan a seleccionar muy bien sus visitas. Sin una buena guía, la ciudad puede resultar dispersa.
										Por ello, recomendamos diferentes tours a elegir según las disponibilidades de tiempo.</p>
		                                <img src="img/tab1.jpg" class="img-responsive" alt="...">
		                            </div>
		                           <!-- <div role="tabpanel" class="tab-pane fade" id="f2"> 
		                                <h4>Visita Guiada</h4>
		                                <p>Casco Histórico de Buenos Aires. <br>
											Todos los Sábado de 11:30 horas a 13:30 horas babsguia organiza una visita guiada por el casco histórico de la ciudad.
											Recorreremos los edificios más importantes, conoceremos cada detalle de la historia de Buenos Aires y de nuestro país.
											Punto de encuentro: Pirámide de Mayo ( centro Plaza de Mayo )</p>
											<p class="text-danger">Tarífa: US$ 42 por pasajero (mínimo 2 pasajeros)</p>
		                                <img src="img/tab2.jpg" class="img-responsive" alt="...">
		                            </div>
		                            <div role="tabpanel" class="tab-pane fade" id="f3"> 
		                                <h4>Tour sobre rieles</h4>
		                                <p>Conocer Buenos Aires en subterráneo. <br>
										Todos los Domingos de 10 horas a 13 horas babsguia organiza una visita guiada por el recorrido de la línea de subte D de la ciudad de Buenos Aires. Comenzando en estación “Catedral”, visitando Plaza de Mayo; continuando el recorrido hasta estación “Tribunales”, visitando Plaza Lavalle con Teatro Colón; descendiendo en estación Plaza Italia conociendo la misma; finalizando en estación Juramento, visitando Plaza Belgrano en el barrio de Belgrano.
										Punto de encuentro: Pirámide de Mayo ( centro Plaza de Mayo ).</p>
										<p class="text-danger">Tarífa: US$ 50 por pasajero (mínimo 2 pasajeros)</p>
		                                <img src="img/tab3.jpg" class="img-responsive" alt="...">
		                            </div>-->
		                            <div role="tabpanel" class="tab-pane fade" id="f5"> <!-- feature #4 content -->
		                                <h4>¿Es importante un guía de turismo?</h4>
		                                <p>Porque al hacerlo se están garantizando que la visita sea segura, interesante y agradable. <br>
										Porque podrán sentirse tranquilos al depositar su confianza en un profesional intérprete del lugar. <br>
										Porque podrán ver con mayor minuciosidad y claridad cada detalle de la zona a través de las explicaciones y los sentimientos incluidos en su relato, ya que el Guía podrá contar la historia de cada ladrillo, adoquín y baldosa de la ciudad.</p>
		                                <img src="img/tab4.jpg" class="img-responsive" alt="...">
		                            </div>
		                        </div>
		                        <br><br>
		                    </div>
		                </div>
		            </div> 
		        </div>
		    </div>
		</section>

		<section id="cd-placeholder-3" class="cd-section cd-container">
			<div id="tf-process">
		        <div class="container"> <!-- container -->
		            <div class="section-header">
		                <h2>Nuestros <span class="highlight"><strong>Servicios</strong></span></h2>
		                <h5><em>Turismo Receptivo Personalizado</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		        </div><!-- end container -->

		        <div class="gray-bg"> <!-- fullwidth gray background -->
		            <div class="container"><!-- container -->
		                <div class="vline"></div> <!--  Vertical Line -->
		                <div id="process" class="row"> <!-- row -->
		                    <div class="col-md-10 col-md-offset-1">
		                        <div class="media process"> <!-- Process #1 -->
		                            <div class="media-right media-middle">
		                                <i class="fa fa-bed"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">Alojamiento en Buenos Aires</h4>
		                                <p>Disponemos de muy buenas opciones de Hoteles, Departamentos, Bed and Breakfast, Apart Hoteles, Hoteles Boutique y Hostels en ciudad de Buenos Aires.
											Haremos la búsqueda de acuerdo a sus necesidades, teniendo en cuenta: punto de interés, zona, servicios, categoría, tipo de alojamiento y forma de pago.</p>
		                            </div>
		                        </div><!-- Process #1 -->

		                        <div class="media process"> <!-- Process #2 -->
		                            <div class="media-right media-middle">
		                                <i class="fa fa-bus"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">Traslados</h4>
		                                <p>Traslados Privados al Aeropuerto Ezeiza ( Ministro Pistarini ) y Aeroparque Jorge Newbery. <br> Traslados Privados con / sin Guía de Turismo.</p>
		                            </div>
		                        </div><!-- Process #2 -->

		                        <div class="media process"> <!-- Process #3 -->
		                            <div class="media-right media-middle">
		                                <i class="fa fa-info"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">Informantes Turísticos</h4>
		                                <p>Reciba información turística de Buenos Aires a su llegada.
											Pida un Informante Turístico babsguia, le brindará toda la información necesaria, para que conozca la ciudad por su cuenta, sin malgastar tiempo.
											Nuestros informantes se acercarán a su alojamiento, con todo el material para su estadía.</p>
		                            </div>
		                        </div>

		                       <!-- <div class="media process"> 
		                            <div class="media-right media-middle">
		                                <i class="fa fa-safari"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">GPS GUÍA DE BUENOS AIRES</h4>
		                                <p>La primera guía turística con GPS para disfrutar tu paseo por Buenos Aires.
										Te llevará a conocer los mejores lugares y recorridos de Buenos Aires. Escucharás los relatos de la historia, la cultura y curiosidades de los puntos de interés. Encontrarás restaurantes, centros de compras y todos los datos que necesitas en tu paseo por la ciudad.
										No te podrás perder, siempre sabrás donde estás y donde ir. </p>
		                            </div>
		                        </div> -->                       
		                    </div>
		                </div> 
				     <div class="text-center">
		                <a href="servicios.php" class="btn btn-primary tf-btn color">Saber más</a>
		            </div><br>
		            </div>
		        </div>  
		    </div>
		</section>
<br><br>
		<section id="cd-placeholder-4" class="cd-section cd-container">
		    <div id="tf-about">
		        <div class="container"> 
		            <div class="section-header">
		                <h2>Ya sabés todo, ahora podés hacer tu <span class="highlight"><strong>Reserva</strong></span></h2>
		                <h5><em>¡Lo mejor de Buenos Aires te lo mostramos nosotros!</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		        </div>

		        <div class="gray-bg">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-6"> 
		                        <div class="about-left-content text-center">
		                            <div class="img-wrap"> 
		                                <div class="profile-img"> 
		                                	<br><br>
		                                    <img src="img/Plaza_San_Martin.jpg" class="img-responsive" alt="Image">
		                                    <ul class="list-inline social"> 
		                                        <li><a href="http://es-la.facebook.com/profile.php?id=100000959273538" target="_blank" class="fa fa-facebook"></a></li>
		                                        <li><a href="http://www.twitter.com/babsguia" target="_blank" class="fa fa-twitter"></a></li> 
		                                        <li><a href="http://ar.linkedin.com/in/babsguia" target="_blank" class="fa fa-linkedin"></a></li> 
		                                    </ul>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="col-md-6">
		                        <div class="about-right-content"> 
		                			<div class="text-center">
		                				<br><br><br><br>
		                            	<h2><span class="small">Confiá en nosotros y vive</span>  momentos fantásticos <br><span class="small">¡haz tu reserva!</span></h2>
					                	<a href="contacto.php" class="btn btn-primary tf-btn color">Reservar</a>
					            	</div>
		                        </div>
		                    </div>
		                </div> 
		            </div>
		        </div> 
		    </div>
		</section>

		<section id="" class="cd-section cd-container">
			<div class="container"> <!-- container -->
		        <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		    </div><!-- end container -->
		    <div id="tf-about">
		        <div class="gray-bg">
		            <div class="container">
		                <div class="row">
		                	<div class="col-md-6">
		                        <div class="about-right-content"> 
		                			<div class="text-center">
		                				<br><br><br><br>
		                            	<h2>Revisa nuestros productos<br><span class="small">¡Regalos, recuerdos, souvenirs!</span></h2>
					                	<a href="productos.php" class="btn btn-primary tf-btn color">Ver Productos</a>
					            	</div>
		                        </div>
		                    </div>
		                    <div class="col-md-6"> 
		                        <div class="about-left-content text-center">
		                            <div class="img-wrap"> 
		                                <div class="profile-img"> 
		                                	<br><br>
		                                    <img src="img/productos.jpg" width="500" class="img-responsive" alt="Image">
		                                    <ul class="list-inline social"> 
		                                        <li><a href="http://es-la.facebook.com/profile.php?id=100000959273538" target="_blank" class="fa fa-facebook"></a></li>
		                                        <li><a href="http://www.twitter.com/babsguia" target="_blank" class="fa fa-twitter"></a></li> 
		                                        <li><a href="http://ar.linkedin.com/in/babsguia" target="_blank" class="fa fa-linkedin"></a></li> 
		                                    </ul>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div> 
		            </div>
		        </div> 
		    </div>
		</section>

		<section id="cd-placeholder-5" class="cd-section cd-container">
			   <div id="tf-blog">
			        <div class="container">
			            <div class="section-header">
			                <h2>Lo nuevo en Babsguia <span class="highlight"><strong>Novedades</strong></span></h2>
			                <h5><em>Novedades en la ciudad Paseos y Tours</em></h5>
			                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
			            </div>
			        </div>

			        <div id="blog-post" class="gray-bg"> 
			            <div class="container">
			                <div class="row grid-layout mt-5"> 
			                	<?php
					            	$news = new Noticia();
					            	$result = $news->getInverse();
					            	if($result->num_rows > 0){
					            		while ($row = $result->fetch_array()){
								            echo'<div class="col-md-3"> 
							                        <div class="post-wrap"> 
														<a href="ver-noticia.php?nid='.$row['id_noticia'].'">
															<div class="media post"> 
																<div class="pic_car">
																	<img src="galerias/noticias/'.$row['atributo3'].'" class="img-responsive">
																</div>
																<div class="media-body">
																	<p class="small">Fecha: '.$row['atributo1'].'</p>
																	<h5 class="media-heading"><strong>'.$row['atributo2'].'</strong></h5>
																</div>
															</div>
														</a>
							                        </div><!-- end Post Wrapper -->
							                    </div> <!-- end Left content col 6 -->';
					            		}
					               	}else{
					            		echo"<br><div class='alert alert-success'> 0 publicaciones!</div>";
					           		}
						        ?>
			                </div>        
			            </div>
			        </div> 
			    </div>
		</section> 

		<section id="cd-placeholder-6" class="cd-section cd-container">
			   <div id="tf-blog">
			        <div class="container">
			            <div class="section-header">
			                <h2>Visita nuestros <span class="highlight"><strong>Links</strong></span> de confianza</h2>
			                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
			            </div>
			        </div>
			        <div class="container">
				        <div class="row">
				        	<?php
				        		$date = new Link();
				        		$result = $date->getLimit();
				        		if($result->num_rows > 0){
				        			while ($row = $result->fetch_array()){
				        			print'<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 titulolink">
							        		<div class="media process"> 
						                        <div class="media-right media-middle">
						                            <a href="'.$row['atributo4'].'" target="_blank"><i class="fa fa-link"></i></a>
						                        </div>
						                        <div class="media-body">
						                            <h4 class="media-heading">'.$row['atributo2'].'</h4>
						                        </div>
						                    </div>
							        	</div>';
				        			}
				        		}else{
				        			print"<div class='alert alert-info'>0 registros</div>";
				        		}
				        	?>
				        </div>
				        <div class="text-center">
			                <a href="links.php" class="btn btn-primary tf-btn color">Ver todos</a>
			            </div>  
			        </div>
			    </div>
		</section>

		<section id="cd-placeholder-6" class="cd-section cd-container">
			   <div id="tf-blog">
			        <div class="container">
			            <div class="section-header">
			                <h2>Visita nuestro <span class="highlight"><strong>Instagram</strong></span></h2>
			                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
			            </div>
			        </div>
			        <div class="container">
				        <div class="row instagram">
							<iframe width='100%' height='1000' src='https://www.instagram.com/babsguia/embed/' frameborder='0'></iframe>
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