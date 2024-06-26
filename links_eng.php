<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-1.php");
?>
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
		<section id="cd-placeholder-6" class="cd-section cd-container">
			   <div id="tf-blog">
			        <div class="container">
			            <div class="section-header">
			            	<nav class="pull-right idioma">
							<ul>
								<li><a href="links.php">Spanish</a></li>
								<li>|</li>
								<li><a href="links_eng.php">English</a></li>
							</ul>
						</nav><br>
			                <h2>Visit our <span class="highlight"><strong>Links</strong></span> of confidence</h2>
			                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
			            </div>
			        </div>
			        <div class="container">
				       <div class="row">
				        	<?php
				        		$date = new Link();
				        		$result = $date->get_eng();
				        		if($result->num_rows > 0){
									while ($row=$result->fetch_array()){
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
				        			print"<div class='alert alert-info'>0 publications</div>";
				        		}
				        	?>
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