<?php
/**
****Sitio web desarrollado por Fernando Catalano
****para Marketing Virtual Web
****fecha: 01/10/2015
**/
require_once("cpanel/conexion.php");
require_once("cpanel/class-6.php");
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
					            	$news = new Producto();
					            	$result= $news->getrowID($_GET['nid']);
					            	$num_row = mysql_num_rows($result);
					            	if($num_row>0){
					            		while ($row=mysql_fetch_array($result)){
											echo'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
														<div class="pic_car">
															<img src="galerias/productos/'.$row['atributo3'].'" class="img-responsive">
														</div>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
														<h2>'.$row['atributo2'].'</h2>
														<p><strong><span class="fa fa-tags"></span> Categoría: </strong>'.$row['atributo2'].'</p>';
														print"<p><strong><span class='fa fa-money'></span> Precio: US$ </strong>".$row['atributo5']."</p>
														<br><br><a href='javascript:;' onClick='mostrarconsulta()' class='btn btn-info'>Ask about this product</a>";				
													print'</div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><hr>
														<br><label><strong><span class="fa fa-info-circle"></span> Description: </strong></label><p><i>'.stripcslashes(nl2br($row['atributo4'])).'</i></p><br>
														<p>Link: <a href="'.$row['atributo7'].'" target="_blank">babsguia</a></p><hr>
													</div>
													<div id="consultarapida">
														<a class="boxclose" id="boxclose" onClick="ocultarconsulta()"><img src="img/delete.png"></a>
														<form id="form_consultarapida" onSubmit="ocultarconsulta()" action="php/send-consultarapida.php" method="POST">
															<label>Name y Lastname: </label><input type="text" name="nombre" class="form-control" required>
															<label>Email: </label><input type="text" name="email" class="form-control" required>
															<label>Phone: </label><input type="text" name="telefono" class="form-control" required>
															<input type="hidden" name="id" class="form-control" value="'.$row['id_productos'].'" required>
															<input type="hidden" name="tipo" class="form-control" value="Producto" required>
															<label>Title: </label><input type="text" name="titulo" class="form-control" value="'.$row['atributo2'].'" READONLY>
															<label>Message: </label><textarea name="mensaje" class="form-control"></textarea>
															<input type="hidden" name="verif" class="form-control">
															<input type="submit" value="Send Form " class="btn btn-info">
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
				        			<h5>other products</h5>
				        		</div>
				        		<?php
					            	$news = new Producto();
					            	$result= $news->getProdMini();
					            	$num_row = mysql_num_rows($result);
					            	if($num_row>0){
					            		while ($row=mysql_fetch_array($result)){
					            			echo'<div class="col-xs-12 separacion">
									        		<div class="item">
														<div class="pic">
									                    <a href="see-products.php?nid='.$row['id_productos'].'">
									                    	<div class="miniature"><img src="galerias/productos/'.$row['atributo3'].'" class="img-responsive"></div>
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
	<a href="javascript:history.back(1)" class="btn btn-danger volveratras"><span class="fa fa-reply-all"> Return</span></a>
<footer>
	<?php require_once("php/footer_eng.php");?>
</footer>
</body>
</html>
			