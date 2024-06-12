<?php
$id_tour = "";
$nombre = "";
$imagen = "";
$especialidad = "";
$carpeta = "";
$grupo = "";
$precio = "";
$dias = "";
$duracion = "";
$paradas = "";
$incluye = "";
$descripcion = "";
$silla = "";
$down = "";
$hipoacustico = "";
$lenguaje = "";
$novidente = "";
$universitario = "";
$idioma = "";
$mu = "";
if (isset($_GET['mu'])) {
	$datos = new Tour($_GET['mu']);
	$id_tour = $datos->getID();
	$especialidad = $datos->get1();
	$nombre = $datos->get2();
	$carpeta = $datos->get3();
	$descripcion = $datos->get4();
	$precio = $datos->get5();
	$dias = $datos->get6();
	$duracion = $datos->get7();
	$paradas = $datos->get8();
	$incluye = $datos->get9();
	$silla = $datos->get10();
	$down = $datos->get11();
	$hipoacustico = $datos->get12();
	$lenguaje = $datos->get13();
	$novidente = $datos->get14();
	$universitario = $datos->get15();
	$idioma = $datos->get16();
	$grupo = $datos->get17();
	$mu = $_GET['mu'];
	$datos->closeconexion();
}
?>
<section id="Cpanel">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<!-- //***** NOVEDADES FORM *****// -->
				<?php
				if (isset($_SESSION['logino'])) :
					if ($_SESSION['logino'] == "yes") : ?>
						<br>
						<h2>Cargar Tours</h2>
						<hr />
						<form class="form-inline" action="cpanel.php?categ=2" method="post" enctype="multipart/form-data" role="form">
							<input type="hidden" name="id_tour" class="form-control" value="<?php echo $mu; ?>">
							<div class="form-group">
								<label>Idioma</label>
								<select name="idioma" class="form-control" required>
									<option value="<?php print $idioma ?>"><?php print $idioma ?></option>
									<option value="Espanol">Español</option>
									<option value="Ingles">Ingles</option>
								</select>
								<label>Título</label>
								<input type='text' name='nombre' required class="form-control" value="<?php print $nombre ?>" /><br>
								<label for="grupo">Grupo Categoria</label>
								<select name="grupo" id="grupo" required class="form-control">
									<option value="<?php print $grupo; ?>"><?php print $grupo; ?></option>
									<option value="Tours presenciales">Tours presenciales</option>
									<option value="Experiencias presenciales">Experiencias presenciales</option>
									<option value="Tours virtuales">Tours virtuales</option>
									<option value="Circuitos autoguiados">Circuitos autoguiados</option>
									<option value="Otros servicios y capacitación">Otros servicios y capacitación</option>
								</select>
								<label>Categoría</label><br>
								<select name='especialidad' required class="form-control">
									<option value="<?php print $especialidad ?>"><?php print $especialidad ?></option>
									<option value="bsasfullday">BS AS FULL DAY</option>
									<option value="citytours">CITY TOURS</option>
									<option value="destacados">DESTACADOS</option>
									<option value="otrostours">OTROS TOURS</option>
									<option value="toursobrerieles">TOUR SOBRE RIELES</option>
									<option value="tourstematicos">TOURS TEMÁTICOS</option>
									<option value="miradadiferente">UNA MIRADA DIFERENTE</option>
									<option value="visitasguiadas">VISITAS GUIADAS</option>
									<option value="walkingtours">WALKING TOURS</option>
								</select><br>
								<label>Dias y Horarios</label>
								<input type='text' name='dias' required class="form-control" value="<?php print $dias ?>"><br>
								<label>Duración del Tour</label>
								<input type='text' name='duracion' required class="form-control" value="<?php print $duracion ?>"><br>
								<label>Paradas</label>
								<input type='text' name='paradas' required class="form-control" value="<?php print $paradas ?>"><br>
								<label>Incluye</label>
								<input type='text' name='incluye' required class="form-control" value="<?php print $incluye ?>"><br>
								<label>Apto</label><br><?php if (is_numeric($id_tour)) {
															print '<div class="alert alert-info">Si modifica un registro, deberá volver a tildar los campos correspondientes.</div>';
														} else {
														} ?>
								<img src="img/silla.jpg"><input type='checkbox' name='silla'><br>
								<img src="img/down.jpg"><input type='checkbox' name='down'><br>
								<img src="img/hipoacustico.jpg"><input type='checkbox' name='hipoacustico'><br>
								<img src="img/hipoacustico1.jpg"><input type='checkbox' name='lenguaje'><br>
								<img src="img/novidente.jpg"><input type='checkbox' name='novidente'><br>
								<img src="img/universitario.jpg"><input type='checkbox' name='universitario'><br>
								<label>Precio</label>
								<input type='text' name='precio' required class="form-control" value="<?php print $precio ?>"><br><br>
								<p class="text-danger">*Asigne primero el nombre de la carpeta de destino<br> (Nombre único, sin acentos ni caracteres extraños).</p>
								<label>Nombre Carpeta</label>
								<?php if (is_numeric($id_tour)) {
									print '<div class="alert alert-info">Si modifica un registro, deberá cambiar esto: (galerias/tours/nombrecarpeta/) y borrar hasta dejar solo (nombrecarpeta).</div>';
								} else {
								} ?>
								<input type='text' name='carpeta' class="form-control" value="<?php print $carpeta; ?>" /><br><br>
								<label>Imágenes</label>
								<p class="text-danger">*Seleccione todas las imágenes de una sola vez.</p>
								<?php if (is_numeric($id_tour)) {
									print '<div class="alert alert-info">Si modifica un registro, no será necesario volver a cargar las imágenes.</div>';
								} else {
								} ?>
								<input type='file' name='archivo[]' class="form-control" multiple="multiple" /><br>
								<label>Descripción</label><br>
								<textarea name="descripcion" required class="form-control" cols="52" rows="10"><?php print $descripcion; ?></textarea>
							</div>
							<div class="form-group"><br>
								<input type="submit" name="submit" class="btn btn-primary" value="<?php if (is_numeric($id_tour)) print "Modificar - Update";
																									else print "Cargar - Insert"; ?>">
							</div>
						</form>
				<?php
						//***** NOVEDADES CODES *****//
						if (isset($_POST['submit']) && isset($_POST['id_tour']) && !is_numeric($_POST['id_tour'])) {
							if ($_FILES["archivo"]['size'] == 0) {
								$archivoimg = "galerias/tours/" . $_POST['carpeta'] . "/";
							} else {
								$carpetaDestino = "galerias/tours/" . $_POST['carpeta'] . "/";
								if ($_FILES["archivo"]["name"][0]) {
									for ($i = 0; $i < count($_FILES["archivo"]["name"]); $i++) {
										if (file_exists($carpetaDestino) || @mkdir($carpetaDestino)) {
											$origen = $_FILES["archivo"]["tmp_name"][$i];
											$destino = $carpetaDestino . $_FILES["archivo"]["name"][$i];
											if (@move_uploaded_file($origen, $destino)) {
												echo "<br>" . $_FILES["archivo"]["name"][$i] . " movido correctamente<br>";
												$archivoimg = $carpetaDestino;
											} else {
												echo "<br>No se ha podido mover el archivo: " . $_FILES["archivo"]["name"][$i];
											}
										} else {
											echo "<br>No se ha podido crear la carpeta";
										}
									}
								} else {
									$archivoimg = "galerias/tours/" . $_POST['carpeta'] . "/";
									echo "<br>No se ha subido ninguna imagen";
								}
							}
							$fecha = date('d/m/Y');
							$datos = new Tour();
							$datos->set1($_POST['especialidad']);
							$datos->set2($_POST['nombre']);
							$datos->set3($archivoimg);
							$datos->set4($_POST['descripcion']);
							$datos->set5($_POST['precio']);
							$datos->set6($_POST['dias']);
							$datos->set7($_POST['duracion']);
							$datos->set8($_POST['paradas']);
							$datos->set9($_POST['incluye']);
							if (isset($_POST['silla'])) {
								$datos->set10($_POST['silla']);
							} else {
								$datos->set10("off");
							}
							if (isset($_POST['down'])) {
								$datos->set11($_POST['down']);
							} else {
								$datos->set11("off");
							}
							if (isset($_POST['hipoacustico'])) {
								$datos->set12($_POST['hipoacustico']);
							} else {
								$datos->set12("off");
							}
							if (isset($_POST['lenguaje'])) {
								$datos->set13($_POST['lenguaje']);
							} else {
								$datos->set13("off");
							}
							if (isset($_POST['novidente'])) {
								$datos->set14($_POST['novidente']);
							} else {
								$datos->set14("off");
							}
							if (isset($_POST['universitario'])) {
								$datos->set15($_POST['universitario']);
							} else {
								$datos->set15("off");
							}
							$datos->set16($_POST['idioma']);
							$datos->set17($_POST['grupo']);
							$datos->insert();
							$datos->closeconexion();
							print "Registro Insertado Correctamente";
						}

						if (isset($_POST['submit']) && isset($_POST['id_tour']) && is_numeric($_POST['id_tour'])) {
							if ($_FILES["archivo"]['size'] == 0) {
								$archivoimg = "galerias/tours/" . $_POST['carpeta'] . "/";
							} else {
								$carpetaDestino = "galerias/tours/" . $_POST['carpeta'] . "/";
								if ($_FILES["archivo"]["name"][0]) {
									for ($i = 0; $i < count($_FILES["archivo"]["name"]); $i++) {
										if (file_exists($carpetaDestino) || @mkdir($carpetaDestino)) {
											$origen = $_FILES["archivo"]["tmp_name"][$i];
											$destino = $carpetaDestino . $_FILES["archivo"]["name"][$i];
											if (@move_uploaded_file($origen, $destino)) {
												echo "<br>" . $_FILES["archivo"]["name"][$i] . " movido correctamente";
												$archivoimg = $carpetaDestino;
											} else {
												echo "<br>No se ha podido mover el archivo: " . $_FILES["archivo"]["name"][$i];
											}
										} else {
											echo "<br>No se ha podido crear la carpeta";
										}
									}
								} else {
									$archivoimg = "galerias/tours/" . $_POST['carpeta'] . "/";
									echo "<br>No se ha subido ninguna imagen";
								}
							}
							$fecha = date('d/m/Y');
							$datos = new Tour($_POST['id_tour']);
							$datos->set1($_POST['especialidad']);
							$datos->set2($_POST['nombre']);
							$datos->set3($archivoimg);
							$datos->set4($_POST['descripcion']);
							$datos->set5($_POST['precio']);
							$datos->set6($_POST['dias']);
							$datos->set7($_POST['duracion']);
							$datos->set8($_POST['paradas']);
							$datos->set9($_POST['incluye']);
							if (isset($_POST['silla'])) {
								$datos->set10($_POST['silla']);
							} else {
								$datos->set10("off");
							}
							if (isset($_POST['down'])) {
								$datos->set11($_POST['down']);
							} else {
								$datos->set11("off");
							}
							if (isset($_POST['hipoacustico'])) {
								$datos->set12($_POST['hipoacustico']);
							} else {
								$datos->set12("off");
							}
							if (isset($_POST['lenguaje'])) {
								$datos->set13($_POST['lenguaje']);
							} else {
								$datos->set13("off");
							}
							if (isset($_POST['novidente'])) {
								$datos->set14($_POST['novidente']);
							} else {
								$datos->set14("off");
							}
							if (isset($_POST['universitario'])) {
								$datos->set15($_POST['universitario']);
							} else {
								$datos->set15("off");
							}
							$datos->set16($_POST['idioma']);
							$datos->set17($_POST['grupo']);
							$datos->update();
							$datos->closeconexion();
							print "Registro Actualizado Correctamente";
						}
						if (isset($_GET['eu']) && is_numeric($_GET['eu'])) {
							$datos = new Tour();
							$datos->delete($_GET['eu']);
							$datos->closeconexion();
							print "Registro Eliminado";
						}
						//------------------TABLA NOVEDADES-----------------------------
						echo "</div>"
							. "<br><br><br><br><div class='col-xs-12 col-sm-8 tabla-novedades'>";
						$datos = new Tour();
						$date = $datos->getCpanel();
						print '<table class="table table-striped">'
							. '<tr>'
							. '<td><b>#</b></td>'
							. '<td><b>Título</b></td>'
							. '<td><b>Categoría</b></td>'
							. '<td><b>Grupo</b></td>'
							. '<td><b>Precio</b></td>'
							. '<td><b>Idioma</b></td>'
							. '<td></td>'
							. '<td></td></tr>';
						while ($row = $date->fetch_array()){
							print '<tr>'
								. '<td>' . $row['id_tour'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td>' . $row['atributo1'] . '</td>'
								. '<td>' . $row['atributo17'] . '</td>'
								. '<td>$' . $row['atributo5'] . '</td>'
								. '<td>' . $row['atributo16'] . '</td>'
								. '<td><a href="cpanel.php?categ=2&mu=' . $row['id_tour'] . '" style="color:orange; text-decoration:none;"><img src="img/edit.png" title="Modificar"></a></td>'
								. '<td><a href="cpanel.php?categ=2&eu=' . $row['id_tour'] . '" style="color:red; text-decoration:none;"><img src="img/trash.png" title="Eliminar"></a></td>'
								. '</tr>';
						}
						print '</table>';
						$datos->closeconexion();
					else : echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head><body><div class="aviso_session">Inicia session!</div><div id="espacio_gallery"></div></body></html>';
					endif;
				else : echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head><body><div class="aviso_session">Inicia session!</div><div id="espacio_gallery"></div></body></html>';
				endif ?>
			</div>
		</div>
	</div>
</section>