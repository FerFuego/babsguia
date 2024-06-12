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
		<?php require_once("php/header_eng.php");?>
	</header>
	<section id="cd-intro">
		<div id="cd-intro-tagline">
			<h1 class="tituloIndex">Buenos Aires Private Tours</h1>
			<a href="contacto_eng.php" class="cd-btn tf-btn color">Contact Us</a>
		</div>
	</section>

	<div class="cd-secondary-nav">
		<a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
		<nav>
			<?php require_once("php/nav_eng.php");?>
		</nav>
	</div>
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			 <div id="tf-services">
		        <div class="container">
		            <div class="section-header">
		                <h2>Who  <span class="highlight"><strong>we are</strong></span></h2>
		                <h5><em>We are a renowned company in Buenos Aires that provides the service of local professionals tourism guides in different languages.
Our company has over 16 years of experience and expertise in the field. <br>
The secret of our success is our unwavering commitment to the customer, offering high quality services . <br>
To achieve this, we use our network of contacts, and qualified personnel with the knowledge and ability to make your visit to Buenos Aires is a success.
We organize private tours (with or without transportation ) that make interesting and pleasant knowledge of the city of Buenos Aires.
						</em></h5>
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
		            	<div class="text-center">
		            		<h5><em>¿Why is it important to hire the services of a tour guide?</em></h5><br><br>
		            	</div>
		                <div class="col-md-6 text-right">
		                    <div class="media service">
		                        <div class="media-body">
		                            <h4 class="media-heading">Security</h4>
		                            <p>Because by doing so they are ensuring that the visit safe , interesting and enjoyable.</p>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="fa fa-unlock-alt"></i>
		                        </div>
		                    </div>

		                    <div class="media service">
		                        <div class="media-body">
		                            <h4 class="media-heading">Confidence</h4>
		                            <p>Because they may feel reassured to put their trust in place a professional interpreter.</p>
		                        </div>
		                        <div class="media-right media-middle">
		                            <i class="fa fa-child"></i>
		                        </div>
		                    </div>

		                    <div class="media service"> 
		                        <div class="media-body">
		                            <h4 class="media-heading">Know in depth</h4>
		                            <p>Because they can see more detail and clarity every detail of the area through the explanations and feelings included in his story , as the guide will tell the story of each brick and tile cobblestone town.</p>
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
		                            <h4 class="media-heading">Experience</h4>
		                            <p>We assure a safe interesting visit , professional, and amena.Nuestros Tourist Guides are highly trained and experienced to assist passengers as required.</p>
		                        </div>
		                    </div>

		                    <div class="media service">
		                        <div class="media-left media-middle">
		                            <i class="fa fa-life-ring"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4 class="media-heading">Help to Disadvantages</h4>
		                            <p>For interacting with each of the components of the tourism system , the guide has the expertise to assist them in whatever they need , giving them the means to solve the problems that may arise experience.</p>
		                        </div>
		                    </div>
		                     <div class="media service">
		                        <div class="media-left media-middle">
		                            <i class="fa fa-wheelchair"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4 class="media-heading">We adapted to their needs</h4>
		                            <p>Some of our tours are adapted for people with disabilities.</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
            <div class="text-center">
                <a href="quienessomos_eng.php" class="btn btn-primary tf-btn color">know more</a>
            </div>
		</section>

		<section id="cd-placeholder-2" class="cd-section cd-container">
			<div id="tf-features">
		        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
		            <div class="container"> <!-- container -->
		                <div class="row" role="tabpanel"> <!-- row -->
				        <div class="container">
				            <div class="section-header">
				                <h2>Let us go to <span class="highlight"><strong>what we know</strong></span></h2>
				                <h5><em>This is our passion.</em></h5>
				                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
				            </div>
				        </div>
		                    <div class="col-md-4"> <!-- tab menu col 4 -->
		                        <ul class="features nav nav-pills nav-stacked" role="tablist">
		                            <li role="presentation" class="active">  <!-- feature tab menu #1 -->
		                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
		                                    <span class="fa fa-picture-o"></span>
		                                    CITY OF BUENOS AIRES<br><small>ciudad de Buenos Aires</small>
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
		                                    It is important a tour guide?<br><small>¿Es importante un guía de turismo?</small>
		                                </a>
		                            </li>
		                            <li role="presentation"> <!-- feature tab menu #4 -->
		                                <a href="tours_eng.php" class="fijo_estilo_tours" aria-controls="f4">
		                                    <span class="fa fa-cubes"></span>
		                                     SEE OUR PRIVATE TOURS<br><small>ver nuestros tours privados</small>
		                                </a>
		                            </li>
									<li role="presentation"> <!-- feature tab menu #4 -->
		                                <a href="personalized-news.php" aria-controls="f5" >
		                                    <span class="fa fa-newspaper-o"></span>
		                                    PERSONALIZED NEWS<br><small>Novedades personalizadas</small>
		                                </a>
		                            </li>
		                            <br><br>
		                        </ul>
		                    </div>

		                    <div class="col-md-8">
		                        <div class="tab-content features-content"> <!-- tab content wrapper -->
		                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
		                                <h4>Buenos Aires</h4>
		                                <p>Buenos Aires is a city with its own personality , open to architecture , culture and art from around the world .
											Cosmopolitan and contradictory, dynamic and traditional, historical and avant-garde , displays a vast range of attractions: monuments, churches , museums , art galleries and theaters ; squares, parks and gardens with ancient trees; characteristic neighborhoods ; large shopping centers, traditional and modern hotels , typical and international restaurants .
											Dimensions of Buenos Aires require very select their visits. Without a good guide , the city may be dispersed.
											We therefore recommend different tours to choose depending on availability of time.</p>
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
		                                <h4>It is important a tour guide?</h4>
		                                <p>Because by doing so they are ensuring that the visit safe , interesting and enjoyable.
											Because they may feel reassured to put their trust in place a professional interpreter .
											Because they can see more detail and clarity every detail of the area through the explanations and feelings included in his story , as the guide will tell the story of each brick and tile cobblestone town.</p>
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
		                <h2>OUR  <span class="highlight"><strong>SERVICES</strong></span></h2>
		                <h5><em>Custom Receptive Tourism</em></h5>
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
		                                <h4 class="media-heading">Accommodation in Buenos Aires</h4>
		                                <p>We have very good options Hotels, Apartments, Bed and Breakfast, Apartment Hotels, Boutique Hotels and Hostels in Buenos Aires.
										We will search according to your needs, taking into account: landmark, location, services, category, type of accommodation and payment .</p>
		                            </div>
		                        </div><!-- Process #1 -->

		                        <div class="media process"> <!-- Process #2 -->
		                            <div class="media-right media-middle">
		                                <i class="fa fa-plane"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">TRANSFERS</h4>
		                                <p>Private Transfer to Ezeiza Airport (Ministro Pistarini) and Aeroparque Jorge Newbery (Domestic Airport).
										Private Transfer with and without Tourist Guide.</p>
		                            </div>
		                        </div><!-- Process #2 -->

		                        <div class="media process"> <!-- Process #3 -->
		                            <div class="media-right media-middle">
		                                <i class="fa fa-info"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">TOURIST INFORMANTS</h4>
		                                <p>Receive tourist information about Buenos Aires at your arrival.
											Request a babsguia Tourist Informant, he will provide you with all the necessary information for you to become acquainted with the city by your own, without wasting your time.
											Our informants will bring you all the material for your stay to your accommodation.</p>
		                            </div>
		                        </div>

		                      <!--  <div class="media process"> 
		                            <div class="media-right media-middle">
		                                <i class="fa fa-safari"></i>
		                            </div>
		                            <div class="media-body">
		                                <h4 class="media-heading">GPS GUIDE OF BUENOS AIRES</h4>
		                                <p>If you are studying our language and want to practise it in a different way, we offer you Spanish spoken guided tours around the city of Buenos Aires, specially designed for foreigners.
											While visiting the most representative districts of the "porteño" tourist circuit -La Boca, San Telmo, Recoleta, among others-, you will have an excellent opportunity to speak Spanish outside the classroom, in a relaxed way, which will make you feel more confident and will improve your learning. Our guides are highly trained for this purpose, ensuring the success of the tour. </p>
		                            </div>
		                        </div>  -->                      
		                    </div>
		                </div> 
				     <div class="text-center">
		                <a href="servicios_eng.php" class="btn btn-primary tf-btn color">Know more</a>
		            </div><br>
		            </div>
		        </div>  
		    </div>
		</section>

		<section id="cd-placeholder-4" class="cd-section cd-container">
		    <div id="tf-about">
		        <div class="container"> 
		            <div class="section-header">
		                <h2>You already know everything, now you can make<span class="highlight"><strong> your reservation</strong></span></h2>
		                <h5><em>We show you the best of Buenos Aires!</em></h5>
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
		                            	<h2><span class="small">Trust us and live</span>  fantastic moments <br><span class="small">make your reservation!</span></h2>
					                	<a href="contacto_eng.php" class="btn btn-primary tf-btn color">Reserve</a>
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
		                            	<h2>Gifts and souvenirs<br></h2>
					                	<a href="productos_eng.php" class="btn btn-primary tf-btn color">See Products</a>
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
			                <h2>BabsGuia <span class="highlight"><strong>News</strong></span></h2>
			                <h5><em>City news – Walks and Tours.</em></h5>
			                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
			            </div>
			        </div>

			        <div id="blog-post" class="gray-bg"> 
			            <div class="container">
			                <div class="row grid-layout mt-5"> 
			                	<br><br>
			                	<?php
					            	$news = new Noticia();
					            	$result= $news->get_eng_Inverse();
					            	if($result->num_rows > 0){
					            		while ($row = $result->fetch_array()){
								            echo'<div class="col-md-4"> 
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
					            		echo"<br><div class='alert alert-success'> 0 publications!</div>";
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
			                <h2>Visit our <span class="highlight"><strong>Link</strong></span> of trust.</h2>
			                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
			            </div>
			        </div>
			        <div class="container">
				        <div class="row">
				        	<?php
				        		$date = new Link();
				        		$result = $date->getengLimit();
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
				        			print"<div class='alert alert-info'>0 link</div>";
				        		}
				        	?>
				        </div>
				        <div class="text-center">
			                <a href="links_eng.php" class="btn btn-primary tf-btn color">See all</a>
			            </div>  
			        </div>
			    </div>
		</section>
		<section id="cd-placeholder-6" class="cd-section cd-container">
			<div id="tf-blog">
				<div class="container">
					<div class="section-header">
						<h2>Visit our <span class="highlight"><strong>Instagram</strong></span></h2>
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
	<?php require_once("php/footer_eng.php");?>
</footer>
</body>
</html>