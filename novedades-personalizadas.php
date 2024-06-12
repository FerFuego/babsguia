<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-7.php");
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
	        <div class="container">
	        	<div class="section-header">
	        		<nav class="pull-right idioma">
							<ul>
								<li><a href="novedades-personalizadas.php">Español</a></li>
								<li>|</li>
								<li><a href="personalized-news.php">Inglés</a></li>
							</ul>
						</nav><br>
	                <h2>NOVEDADES<span class="highlight"><strong> PERSONALIZADAS</strong></span></h2>
	                <h5><em>Paseos Privados, Paseos Personalizados</em></h5>
	                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
	            </div>
	            <div class="row">
	            	<?php
		            	$news = new Nuevo();
		            	$result = $news->get();
		            	if($result->num_rows > 0) :
							while ($row=$result->fetch_array()) : ?>
					            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 arreglo_altura">
                                    <div class="item">
                                        <div class="pic">
                                            <a href="ver-nuevo.php?nid=<?php echo $row['id_nuevo']; ?>">
                                                <figure><img src="galerias/nuevos/<?php echo $row['atributo3']; ?>" class="img-responsive"></figure>
                                                <div class="hover-effect">
                                                    <div class="iconolink">
                                                        <img src="img/logo-xs.png">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mini-descrip">
                                            <h3 class="mb-0"><?php echo $row['atributo2']; ?></h3>
                                            <?php echo cadena::corta($row['atributo4'],140); ?>...
                                        </div>
					                </div>
				                </div>
		            		<?php endwhile;
                        else : ?>
		            		<br><div class='alert alert-success'> 0 publicaciones!</div>
                    	<?php endif; ?>
	            </div>
	        </div>
		</section>
	</main>
<footer>
	<?php require_once("php/footer.php");?>
</footer>
</body>
</html>