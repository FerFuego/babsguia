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
	        <div class="container">
	        	<div class="section-header">
	        		<nav class="pull-right idioma">
							<ul>
								<li><a href="productos.php">Spanish</a></li>
								<li>|</li>
								<li><a href="productos_eng.php">English</a></li>
							</ul>
						</nav><br>
	                <h2>OUR<span class="highlight"><strong> PRODUCTS</strong></span></h2>
	                <h5><em>Gifts and souvenirs</em></h5>
	                <div class="fancy"><span><img src="img/logo-xs.png" alt="..."></span></div>
	            </div>
	            <div class="row">
	            	<?php
						class Cadena{
	                        public static function  corta($palabra,$num){
	                            $largo=strlen($palabra);
	                            $cadena=substr($palabra,0,$num);
	                            return $cadena;
	                        }
	                    }//clase que limita los caracteres mostrados para que no deforme el contenedor.
		            	$news = new Producto();
		            	$result= $news->get_eng();
		            	$num_row = mysql_num_rows($result);
		            	if($num_row>0){
		            		while ($row=mysql_fetch_array($result)){
					            echo'<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 arreglo_altura">
						        		<div class="item">
											<div class="pic">
						                    <a href="see-products.php?nid='.$row['id_productos'].'">
						                    	<figure><img src="galerias/productos/'.$row['atributo3'].'" class="img-responsive"></figure>
						                    	<div class="hover-effect">
						                    		<div class="iconolink">
						                    			<img src="img/logo-xs.png">
						                    		</div>
						                    	</div>
					                    	</a>
						                    </div>
					                    <p class="mini-descrip"><b>'.$row['atributo2'].'</b><br><i>'.cadena::corta($row['atributo4'],140).'...</i></p>
					                </div>
				                </div>';
		            		}
		               	}else{
		            		echo"<br><div class='alert alert-success'> 0 publications!</div>";
		           		}
			        ?>
	            </div>
	        </div>
		</section>
	</main>
<footer>
	<?php require_once("php/footer_eng.php");?>
</footer>
</body>
</html>