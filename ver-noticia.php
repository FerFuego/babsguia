<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-2.php");
?>
<!doctype html>
<html lang="es" class="no-js">
<head>
	<?php require_once("php/head.php");?>
</head>
<body>
	<a name="top"></a>
	<div class="cd-secondary-nav-2">
		<?php require_once("php/nav-biz.php");?>
	</div>
	<main class="cd-main-content">
		<section id="cd-placeholder-1" class="cd-section cd-container">
			 <div id="tf-services">
		        <div class="container">
		            <div class="section-header">
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
						    <div class="col-xs-12 col-sm-12 col-md-10  col-lg-10 background-white">
							<?php
								if(isset($_GET['nid'])):
					            	$news = new Noticia();
					            	$result = $news->getrowID($_GET['nid']);
					            	if($result->num_rows > 0) :
					            		while ($row = $result->fetch_array()) : ?>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="pic_car">
													<?php if ($row['atributo3']) : ?>
														<img src="galerias/noticias/<?php echo $row['atributo3']; ?>" class="img-responsive"><br>
													<?php endif; ?>

													<?php if ($row['atributo7']) : ?>
														<img src="galerias/noticias/<?php echo $row['atributo7']; ?>" class="img-responsive"><br>
													<?php endif; ?>
													
													<?php if ($row['atributo8']) : ?>
														<img src="galerias/noticias/<?php echo $row['atributo8']; ?>" class="img-responsive"><br>
													<?php endif; ?>
													
													<?php if ($row['atributo9']) : ?>
														<img src="galerias/noticias/<?php echo $row['atributo9']; ?>" class="img-responsive">
													<?php endif; ?>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 desc_noti">
												<h2><?php echo $row['atributo2']; ?></h2>
												<hr><br>
												<div>
													<?php echo $row['atributo4']; ?>
												</div>
												<hr>
											</div>
					            		<?php endwhile; ?>
					               	<?php else : ?>
					            		<br><div class='alert alert-danger'> Recurso no encontrado.</div>
					           		<?php endif; ?>
								<?php endif; ?>
				        	</div>
						</div>		                
		        </div>
		    </div>
		</section>
	</main>
<a href="javascript:history.back(1)" class="btn btn-danger volveratras"><span class="fa fa-reply-all"> Volver</span></a>
<footer>
	<?php require_once("php/footer.php");?>
</footer>
</body>
</html>
			