<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-7.php");
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
					            	$news = new Nuevo();
					            	$result = $news->getrowID($_GET['nid']);
					            	if($result->num_rows > 0) :
					            		while ($row = $result->fetch_array()) : ?>
											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="pic_car">
													<?php if ($row['atributo5']) : ?>
														<!-- Video embed -->
														<iframe width="442" height="250" src="<?php echo $row['atributo5']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><br><br>
													<?php endif; ?>

													<?php if ($row['atributo3']) : ?>
														<img src="galerias/nuevos/<?php echo $row['atributo3']; ?>" class="img-responsive"><br>
													<?php endif; ?>

													<?php if ($row['atributo7']) : ?>
														<img src="galerias/nuevos/<?php echo $row['atributo7']; ?>" class="img-responsive"><br>
													<?php endif; ?>
													
													<?php if ($row['atributo8']) : ?>
														<img src="galerias/nuevos/<?php echo $row['atributo8']; ?>" class="img-responsive"><br>
													<?php endif; ?>
													
													<?php if ($row['atributo9']) : ?>
														<img src="galerias/nuevos/<?php echo $row['atributo9']; ?>" class="img-responsive">
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
												<br><br><a href='javascript:;' onClick='mostrarconsulta()' class='btn btn-info'>Consultar por esto</a>
											</div>
											<div id="consultarapida">
												<a class="boxclose" id="boxclose" onClick="ocultarconsulta()"><img src="img/delete.png"></a>
												<form id="form_consultarapida" onSubmit="ocultarconsulta()" action="php/send-consultarapida.php" method="POST">
													<label>Nombre y Apellido: </label><input type="text" name="nombre" class="form-control" required>
													<label>Email: </label><input type="text" name="email" class="form-control" required>
													<label>Teléfono: </label><input type="text" name="telefono" class="form-control" required>
													<input type="hidden" name="id" class="form-control" value="<?php echo $row['id_nuevo']; ?>" required>
													<input type="hidden" name="tipo" class="form-control" value="Producto" required>
													<label>Título: </label><input type="text" name="titulo" class="form-control" value="<?php echo $row['atributo2']; ?>" READONLY>
													<label>Mensaje: </label><textarea name="mensaje" class="form-control"></textarea>
													<input type="hidden" name="verif" class="form-control">
													<dl class="dl-horizontal">
														<div class="g-recaptcha" data-sitekey="6LfqdvcpAAAAANT3xmFOcyGeuQRSgweX0L3gxvYH"></div>
													</dl>
													<input type="submit" value="Enviar Consulta" class="btn btn-info">
												</form>
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
			