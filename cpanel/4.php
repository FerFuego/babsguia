<?php 
$id_productos="";
$nombre="";
$imagen="";
$especialidad="";
$carpeta="";
$precio="";
$descripcion="";
$lenguaje="";
$link="";
if(isset($_GET['mu'])){
	$datos=new Producto($_GET['mu']);
	$id_productos=$datos->getID();
	$nombre=$datos->get2();
	$especialidad=$datos->get1();
	$precio=$datos->get5();
	$link=$datos->get7();
	$carpeta=$datos->get3();
	$descripcion=$datos->get4();
	$lenguaje=$datos->get6();
	$close= $datos->closeconexion();
}
?>
<section id="Cpanel">
	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<!-- //***** NOVEDADES FORM *****// -->
					<?php
					 if(isset($_SESSION['logino'])):
	                          if($_SESSION['logino'] == "yes"): ?>
	                      	<br>
							<h2>Cargar Productos</h2><hr/>
							<form class="form-inline" action="cpanel.php?categ=4" method="post" enctype="multipart/form-data" role="form">
							<input type="hidden" name="id_productos" class="form-control" value="<?php print $_GET['mu'] ?>">
							<div class="form-group">
							<label>Idioma</label>
							<select name="lenguaje" class="form-control" required>
								<option value="<?php print $lenguaje ?>"><?php print $lenguaje ?></option>
								<option value="Espanol">Español</option>
								<option value="Ingles">Ingles</option>
							</select>
							<label>Título</label>
							<input type='text' name='nombre' required class="form-control" value = "<?php print $nombre ?>"/><br>
							<label>Precio</label>
							<input type='text' name='precio' required class="form-control" value = "<?php print $precio ?>"><br>
							<label>Link</label>
							<input type='text' name='link' required class="form-control" value = "<?php print $link ?>"><br>
							<label>Imágen</label><?php if(is_numeric($id_productos)){print'<div class="alert alert-info">Si modifica un registro, deberá vovler a cargar la imagen.</div>';}else{}?>
							<input type='file' name='imagen' class="form-control"/><br>
							<label>Descripción</label><br>
							<textarea name="descripcion" required class="form-control" cols="52" rows="10"><?php print $descripcion; ?></textarea>
							</div>
							<div class="form-group"><br>
							<input type="submit" name="submit" class="btn btn-primary" value ="<?php if(is_numeric($id_productos)) print "Modificar - Update"; else print "Cargar - Insert";?>">
							</div>
							</form>
						<?php
						//***** NOVEDADES CODES *****//
						if (isset($_POST['submit'])&&isset($_POST['id_productos'])&&!is_numeric($_POST['id_productos'])) {
							if($_FILES["imagen"]['size'] == 0){
								$archivoimg = "";
							}else{
							   $status = "";
							   $tamano = $_FILES["imagen"]['size'];
							   $tipo = $_FILES["imagen"]['type'];
							   $archivo = $_FILES["imagen"]['name'];
							   $prefijo = substr(md5(uniqid(rand())),0,6);
								   if ($archivo != "") {
								      $destino2 = $prefijo."_".$archivo;
								      $destino = "galerias/productos/".$prefijo."_".$archivo;
								      if (copy($_FILES['imagen']['tmp_name'],$destino)) {
								         $status = "Archivo subido: <b>".$archivo."</b>";
								      } else {
								         $status = "Error al subir el archivo";
								      }
								   } else {
								      $status = "Error al subir archivo";
								   }
						    	$archivoimg = $destino2;
							}
						$fecha = date('d/m/Y');
						$datos= new Producto();
						$datos->set1(0);
						$datos->set2($_POST['nombre']);
						$datos->set3($archivoimg);
						$datos->set4($_POST['descripcion']);
						$datos->set5($_POST['precio']);	
						$datos->set6($_POST['lenguaje']);	
						$datos->set7($_POST['link']);	
						$datos->set8(0);	
						$datos->set9(0);		
						$datos->insert();
						$close= $datos->closeconexion();
						print "Registro Insertado Correctamente";
						}

						if (isset($_POST['submit'])&&isset($_POST['id_productos'])&&is_numeric($_POST['id_productos'])) {
							if($_FILES["imagen"]['size'] == 0){
								$archivoimg = "";
							}else{
							   $status = "";
							   $tamano = $_FILES["imagen"]['size'];
							   $tipo = $_FILES["imagen"]['type'];
							   $archivo = $_FILES["imagen"]['name'];
							   $prefijo = substr(md5(uniqid(rand())),0,6);
								   if ($archivo != "") {
								      $destino2 = $prefijo."_".$archivo;
								      $destino = "galerias/productos/".$prefijo."_".$archivo;
								      if (copy($_FILES['imagen']['tmp_name'],$destino)) {
								         $status = "Archivo subido: <b>".$archivo."</b>";
								      } else {
								         $status = "Error al subir el archivo";
								      }
								   } else {
								      $status = "Error al subir archivo";
								   }
						    	$archivoimg = $destino2;
							}
						$fecha = date('d/m/Y');
						$datos= new Producto($_POST['id_productos']); 
						$datos->set1(0);
						$datos->set2($_POST['nombre']);
						$datos->set3($archivoimg);
						$datos->set4($_POST['descripcion']);
						$datos->set5($_POST['precio']);	
						$datos->set6($_POST['lenguaje']);	
						$datos->set7($_POST['link']);	
						$datos->set8(0);	
						$datos->set9(0);	
						$datos->update(); 
						$close= $datos->closeconexion();
						print "Registro Actualizado Correctamente";
					}
					if (isset($_GET['eu'])&&is_numeric($_GET['eu'])){ 
						$datos= new Producto();
						$datos->delete($_GET['eu']); 
						$close= $datos->closeconexion();
						print "Registro Eliminado";
					}
					//------------------TABLA NOVEDADES-----------------------------
					echo"</div>"
					."<br><br><br><br><div class='col-xs-12 col-sm-6 tabla-novedades'>";
					$datos= new Producto();
					$date= $datos->getCpanel();
					print '<table class="table table-striped">'
							  .'<tr>'
							  .'<td><b>#</b></td>'
							  .'<td><b>Título</b></td>'
							  .'<td><b>Precio</b></td>'
							  .'<td></td>'
							  .'<td></td></tr>';
					while ($row=mysql_fetch_Array($date)){
						print '<tr>'
							  .'<td>'.$row['id_productos'].'</td>'
							  .'<td>'.$row['atributo2'].'</td>'
							  .'<td>$'.$row['atributo5'].'</td>'
							  .'<td><a href="cpanel.php?categ=4&mu='.$row['id_productos'].'" style="color:orange; text-decoration:none;"><img src="img/edit.png" title="Modificar"></a></td>'   
							  .'<td><a href="cpanel.php?categ=4&eu='.$row['id_productos'].'" style="color:red; text-decoration:none;"><img src="img/trash.png" title="Eliminar"></a></td>'		
							  .'</tr>';
					}
					print '</table>';
					$close= $datos->closeconexion();
					else: echo'<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head><body><div class="aviso_session">Inicia session!</div><div id="espacio_gallery"></div></body></html>'; endif;
				else: echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head><body><div class="aviso_session">Inicia session!</div><div id="espacio_gallery"></div></body></html>'; endif ?>
			</div>
		</div>	
	</div>
</section>