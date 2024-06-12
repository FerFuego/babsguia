<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-4.php");
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
		                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
		            </div>
		            <div class="row">
						    <div class="col-xs-12 col-sm-12 col-md-10  col-lg-10 background-white">
							<?php
								if(isset($_GET['nid'])){
					            	$news = new Tour();
					            	$result= $news->getrowID($_GET['nid']);
					            	$num_row = mysql_num_rows($result);
					            	if($num_row>0){
					            		while ($row=mysql_fetch_array($result)){
					            			$dir = $row['atributo3'];
											$array = glob("$dir{*.gif,*.JPG,*.jpg,*.jpeg,*.png}", GLOB_BRACE); 
											$resultado = count($array);
											echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<div class="pic_car">
															<div id="myCarousel" class="carousel slide" data-ride="carousel">
																  <div class="carousel-inner" role="listbox">
																  	<div class="item active">
																      <a data-lightbox="example-set" data-title=""  href="'.$array[0].'"><img src="'.$array[0].'" class="img-responsive"></a>
																    </div>';
																    foreach($array as $images){
																	 echo'<div class="item">
																      <a data-lightbox="example-set" data-title=""  href="'.$images.'"><img src="'.$images.'" class="img-responsive"></a>
																    </div>';
																	}
																  echo'</div>
																  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
																    <span class="fa fa-chevron-left" aria-hidden="true"></span>
																    <span class="sr-only">Previous</span>
																  </a>
																  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
																    <span class="fa fa-chevron-right" aria-hidden="true"></span>
																    <span class="sr-only">Next</span>
																  </a>
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
														<h2>'.$row['atributo2'].'</h2>
														<p><strong><span class="fa fa-tags"></span> Categoría: </strong>'.$row['atributo1'].'</p>
														<p><strong><span class="fa fa-clock-o"></span> Días y Horarios: </strong>'.$row['atributo6'].'</p>
														<p><strong><span class="fa fa-hourglass-end"></span> Duración: </strong>'.$row['atributo7'].'</p>
														<p><strong><span class="fa fa-hand-paper-o"></span> Paradas: </strong>'.$row['atributo8'].'</p>
														<p><strong><span class="fa fa-asterisk"></span> Incluye: </strong>'.$row['atributo9'].'</p>
														<p><strong><span class="fa fa-hand-o-right"></span> Apto: </strong>';
														 if($row['atributo10']=='on'){print' <img src="img/silla.jpg" title="Silla de Ruedas"> ';}
														 if($row['atributo11']=='on'){print' <img src="img/down.jpg" title="Down"> ';}
														 if($row['atributo12']=='on'){print' <img src="img/hipoacustico.jpg" title="Hipoacúsicos"> ';}
														 if($row['atributo13']=='on'){print' <img src="img/hipoacustico1.jpg" title="Problemas de Lenguaje"> ';} 
														 if($row['atributo14']=='on'){print' <img src="img/novidente.jpg" title="No Vidente"> ';}
														 if($row['atributo15']=='on'){print' <img src="img/universitario.jpg" title="Estudiantes Universitarios"> </p>';}
														print"<p><strong><span class='fa fa-money'></span> Precio: US$ </strong>".$row['atributo5']."</p>
														<br><br><a href='javascript:;' onClick='mostrarconsulta()' class='btn btn-info'>Consultar por este Tour</a>";				
													print'</div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><hr>
														<br><label><strong><span class="fa fa-info-circle"></span> Descripción: </strong></label><p><i>'.stripcslashes(nl2br($row['atributo4'])).'</i></p><hr>
													</div>
													<div id="consultarapida">
														<a class="boxclose" id="boxclose" onClick="ocultarconsulta()"><img src="img/delete.png"></a>
														<form id="form_consultarapida" onSubmit="ocultarconsulta()" action="php/send-consultarapida.php" method="POST">
															<label>Nombre y Apellido: </label><input type="text" name="nombre" class="form-control" required>
															<label>Email: </label><input type="text" name="email" class="form-control" required>
															<label>Teléfono: </label><input type="text" name="telefono" class="form-control" required>
															<label>Cantidad de Pasajeros: </label><input type="text" name="cantidad" class="form-control" required>
															<input type="hidden" name="id" class="form-control" value="'.$row['id_tour'].'" required>
															<input type="hidden" name="tipo" class="form-control" value="Tour" required>
															<label>Título: </label><input type="text" name="titulo" class="form-control" value="'.$row['atributo2'].'" READONLY>
															<label>Mensaje: </label><textarea name="mensaje" class="form-control"></textarea>
															<input type="hidden" name="verif" class="form-control">
															<input type="submit" value="Enviar Consulta" class="btn btn-info">
														</form>
													</div>';
					            		}
					               	}else{
					            		echo"<br><div class='alert alert-success'> 0 publicaciones!</div>";
					           		}
								}
					        ?>
				        	</div>
				        	<div class="hidden-xs hidden-sm-2 col-md-2 col-lg-2 menu-ulitmos">
				        		<div class="col-xs-12">
				        			<h5>Recomendados</h5>
				        		</div>
				        		<?php
					            	$news = new Tour();
					            	$result= $news->getMini();
					            	$num_row = mysql_num_rows($result);
					            	if($num_row>0){
					            		while ($row=mysql_fetch_array($result)){
					            			$dir = $row['atributo3'];
											$array = glob("$dir{*.gif,*.JPG,*.jpg,*.jpeg,*.png}", GLOB_BRACE);
					            			echo'<div class="col-xs-12 separacion">
									        		<div class="item">
														<div class="pic">
									                    <a href="ver-tour.php?nid='.$row['id_tour'].'">
									                    	<div class="miniature"><img src="'.$array[0].'" class="img-responsive"></div>
									                    	<div class="hover-effect"><div class="iconolink-mini"><img src="img/logo-xs.png"></div><div class="texto-hover-mini">'.$row['atributo2'].'</div></div>
								                    	</a>
									                </div>
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
		    </div>
		</section>
	</main>
	<a href="javascript:history.back(1)" class="btn btn-danger volveratras"><span class="fa fa-reply-all"> Volver</span></a>
<footer>
	<?php require_once("php/footer.php");?>
</footer>
</body>
</html>
			