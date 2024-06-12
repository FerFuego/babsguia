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
		<?php require_once("php/nav-biz-eng.php");?>
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
					            	if($result->num_rows > 0){
					            		while ($row = $result->fetch_array()){
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
														<p><strong><span class="fa fa-tags"></span> Category: </strong>'.$row['atributo1'].'</p>
														<p><strong><span class="fa fa-clock-o"></span> Timetable: </strong>'.$row['atributo6'].'</p>
														<p><strong><span class="fa fa-hourglass-end"></span> Duration: </strong>'.$row['atributo7'].'</p>
														<p><strong><span class="fa fa-hand-paper-o"></span> Stops: </strong>'.$row['atributo8'].'</p>
														<p><strong><span class="fa fa-asterisk"></span> Includes: </strong>'.$row['atributo9'].'</p>
														<p><strong><span class="fa fa-hand-o-right"></span> Suitable: </strong>';
														 if($row['atributo10']=='on'){print' <img src="img/silla.jpg" title="Wheelchair"> ';}
														 if($row['atributo11']=='on'){print' <img src="img/down.jpg" title="Down"> ';}
														 if($row['atributo12']=='on'){print' <img src="img/hipoacustico.jpg" title="hard of hearing"> ';}
														 if($row['atributo13']=='on'){print' <img src="img/hipoacustico1.jpg" title="Language Issues"> ';} 
														 if($row['atributo14']=='on'){print' <img src="img/novidente.jpg" title="no Seer"> ';}
														 if($row['atributo15']=='on'){print' <img src="img/universitario.jpg" title="University students"> </p>';}
														print"<p><strong><span class='fa fa-money'></span> Cost: US$ </strong>".$row['atributo5']."</p>
														<br><br><a href='javascript:;' onClick='mostrarconsulta()' class='btn btn-info'>Consult for this Tour</a>";				
													print'</div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><hr>
														<br><label><strong><span class="fa fa-info-circle"></span> Description: </strong></label><p><i>'.stripcslashes(nl2br($row['atributo4'])).'</i></p><hr>
													</div>
													<div id="consultarapida">
														<a class="boxclose" id="boxclose" onClick="ocultarconsulta()"><img src="img/delete.png"></a>
														<form id="form_consultarapida" onSubmit="ocultarconsulta()" action="php/send-consultarapida-eng.php" method="POST">
															<label>Name and Lastname: </label><input type="text" name="nombre" class="form-control" required>
															<label>Email: </label><input type="text" name="email" class="form-control" required>
															<label>Phone: </label><input type="text" name="telefono" class="form-control" required>
															<label>Passengers quantity: </label><input type="text" name="cantidad" class="form-control" required>
															<input type="hidden" name="id" class="form-control" value="'.$row['id_tour'].'" required>
															<input type="hidden" name="tipo" class="form-control" value="Tour" required>
															<label>Title: </label><input type="text" name="titulo" class="form-control" value="'.$row['atributo2'].'" READONLY>
															<label>Message: </label><textarea name="mensaje" class="form-control"></textarea>
															<input type="hidden" name="verif" class="form-control">
															<input type="submit" value="Send Form" class="btn btn-info">
														</form>
													</div>';
					            		}
					               	}else{
					            		echo"<br><div class='alert alert-success'> 0 publications!</div>";
					           		}
								}
					        ?>
				        	</div>
				        	<div class="hidden-xs hidden-sm-2 col-md-2 col-lg-2 menu-ulitmos">
				        		<div class="col-xs-12">
				        			<h5>Recommended</h5>
				        		</div>
				        		<?php
					            	$news = new Tour();
					            	$result = $news->getengMini();
					            	if($result->num_rows > 0){
					            		while ($row = $result->fetch_array()){
					            			$dir = $row['atributo3'];
											$array = glob("$dir{*.gif,*.JPG,*.jpg,*.jpeg,*.png}", GLOB_BRACE);
					            			echo'<div class="col-xs-12 separacion">
									        		<div class="item">
														<div class="pic">
									                    <a href="see-tours.php?nid='.$row['id_tour'].'">
									                    	<div class="miniature"><img src="'.$array[0].'" class="img-responsive"></div>
									                    	<div class="hover-effect"><div class="iconolink-mini"><img src="img/logo-xs.png"></div><div class="texto-hover-mini">'.$row['atributo2'].'</div></div>
								                    	</a>
									                </div>
								                </div>
							                </div>';
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
	</main>
	<a href="javascript:history.back(1)" class="btn btn-danger volveratras"><span class="fa fa-reply-all"> Return</span></a>
<footer>
	<?php require_once("php/footer_eng.php");?>
</footer>
</body>
</html>
			