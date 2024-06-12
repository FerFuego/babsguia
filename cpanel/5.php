<?php 
$id_recurso="";
$nombre="";
$imagen="";
$especialidad="";
$precio="";
$descripcion="";
if(isset($_GET['mu'])){
	$datos=new Recurso($_GET['mu']);
	$id_recurso=$datos->getID();
	$nombre=$datos->get2();
	$especialidad=$datos->get1();
	$imagen=$datos->get3();
	$descripcion=$datos->get4();
	$precio=$datos->get5();
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
							<h2>Cargar Recursos</h2><hr/>
							<form class="form-inline" action="cpanel.php?categ=recursos" method="post" enctype="multipart/form-data" role="form">
							<input type="hidden" name="id_recurso" class="form-control" value="<?php print $_GET['mu'] ?>">
							<div class="form-group">
							<label>Título</label>
							<input type='text' name='nombre' required class="form-control" value = "<?php print $nombre ?>"/><br>
							<label>Categoria</label>
							<input type='text' name='especialidad' required class="form-control" value = "<?php print $especialidad ?>"><br>
							<label>Precio</label>
							<input type='text' name='precio' required class="form-control" value = "<?php print $precio ?>"><br>
							<label>Imágen</label>
							<input type='file' name='archivo[]' class="form-control" multiple="multiple"/><br>
							<label>Descripción</label><br>
							<textarea name="descripcion" required class="form-control" cols="52" rows="10"><?php print $descripcion; ?></textarea>
							</div>
							<div class="form-group"><br>
							<input type="submit" name="submit" class="btn btn-primary" value ="<?php if(is_numeric($id_recurso)) print "Modificar - Update"; else print "Cargar - Insert";?>">
							</div>
							</form>
						<?php
						//***** NOVEDADES CODES *****//
						if (isset($_POST['submit'])&&isset($_POST['id_recurso'])&&!is_numeric($_POST['id_recurso'])) {
							if($_FILES["archivo"]['size'] == 0){
								$archivoimg = "galeria/recursos/".$_POST['nombre']."/";
							}else{
							    $carpetaDestino="galeria/recursos/".$_POST['nombre']."/";
							    if($_FILES["archivo"]["name"][0]){
							        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++){
						                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
						                    $origen=$_FILES["archivo"]["tmp_name"][$i];
						                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
						                    if(@move_uploaded_file($origen, $destino)) {
						                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente<br>";
						                       	$archivoimg=$carpetaDestino;
						                    }else{
						                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
						                    }
						                }else{
						                    echo "<br>No se ha podido crear la carpeta";
						                }
							        }
							    }else{
							    	$archivoimg = "galeria/recursos/".$_POST['nombre']."/";
							        echo "<br>No se ha subido ninguna imagen";
							    }
							}
						$fecha = date('d/m/Y');
						$datos= new Recurso();
						$datos->set1($_POST['especialidad']);
						$datos->set2($_POST['nombre']);
						$datos->set3($archivoimg);
						$datos->set4($_POST['descripcion']);
						$datos->set5($_POST['precio']);	
						$datos->set6(0);	
						$datos->set7(0);	
						$datos->set8(0);	
						$datos->set9(0);		
						$datos->insert();
						$close= $datos->closeconexion();
						print "Registro Insertado Correctamente";
						}

						if (isset($_POST['submit'])&&isset($_POST['id_recurso'])&&is_numeric($_POST['id_recurso'])) {
							if($_FILES["archivo"]['size'] == 0){
								$archivoimg = "galeria/recursos/".$_POST['nombre']."/";
							}else{
								 $carpetaDestino="galeria/recursos/".$_POST['nombre']."/";
							    if($_FILES["archivo"]["name"][0]){
							        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++){
						                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino)){
						                    $origen=$_FILES["archivo"]["tmp_name"][$i];
						                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
						                    if(@move_uploaded_file($origen, $destino)) {
						                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
						                       	$archivoimg=$carpetaDestino;
						                    }else{
						                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
						                    }
						                }else{
						                    echo "<br>No se ha podido crear la carpeta";
						                }
							        }
							    }else{
							    	$archivoimg ="galeria/recursos/".$_POST['nombre']."/";
							        echo "<br>No se ha subido ninguna imagen";
							    }
							}
						$fecha = date('d/m/Y');
						$datos= new Recurso($_POST['id_recurso']); 
						$datos->set1($_POST['especialidad']);
						$datos->set2($_POST['nombre']);
						$datos->set3($archivoimg);
						$datos->set4($_POST['descripcion']);
						$datos->set5($_POST['precio']);	
						$datos->set6(0);	
						$datos->set7(0);	
						$datos->set8(0);	
						$datos->set9(0);	
						$datos->update(); 
						$close= $datos->closeconexion();
						print "Registro Actualizado Correctamente";
					}
					if (isset($_GET['eu'])&&is_numeric($_GET['eu'])){ 
						$datos= new Recurso();
						$datos->delete($_GET['eu']); 
						$close= $datos->closeconexion();
						print "Registro Eliminado";
					}
					//------------------TABLA NOVEDADES-----------------------------
					echo"</div>"
					."<br><br><br><br><div class='col-xs-12 col-sm-6 tabla-novedades'>";
					$datos= new Recurso();
					$date= $datos->getRecurso();
					print '<table class="table table-striped">'
							  .'<tr>'
							  .'<td><b>#</b></td>'
							  .'<td><b>Título</b></td>'
							  .'<td><b>Categoría</b></td>'
							  .'<td><b>Precio</b></td>'
							  .'<td></td>'
							  .'<td></td></tr>';
					while ($row=mysql_fetch_Array($date)){
						print '<tr>'
							  .'<td>'.$row['id_recurso'].'</td>'
							  .'<td>'.$row['atributo2'].'</td>'
							  .'<td>'.$row['atributo1'].'</td>'
							  .'<td>$'.$row['atributo5'].'</td>'
							  .'<td><a href="cpanel.php?categ=recursos&mu='.$row['id_recurso'].'" style="color:orange; text-decoration:none;"><img src="img/edit.png" title="Modificar"></a></td>'   
							  .'<td><a href="cpanel.php?categ=recursos&eu='.$row['id_recurso'].'" style="color:red; text-decoration:none;"><img src="img/trash.png" title="Eliminar"></a></td>'		
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
		