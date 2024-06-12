<?php
$fechaoperacion = date('d-m-Y');
$id_noticia = "";
$fecha = "";
$titulo = "";
$imagen = "";
$imagen1 = "";
$imagen2 = "";
$imagen3 = "";
$descripcion = "";
$lenguaje = "";
$control_img = "";
$control_img1 = "";
$control_img2 = "";
$control_img3 = "";
$me = "";
if (isset($_GET['me'])) {
	$datos = new Noticia($_GET['me']);
	$id_noticia = $datos->getID();
	$fecha = $datos->get1();
	$titulo = $datos->get2();
	$imagen = $datos->get3();
	$lenguaje = $datos->get6();
	$imagen1 = $datos->get7();
	$imagen2 = $datos->get8();
	$imagen3 = $datos->get9();
	$descripcion = $datos->get4();
	$me = $_GET['me'];
	$datos->closeconexion();
}
?>
<section id="Cpanel">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<?php
				if (isset($_SESSION['logino'])) :
					if ($_SESSION['logino'] == "yes") : ?>
						<br>
						<h2>Cargar Novedades</h2>
						<hr />
						<form name="formNews" class="form-inline" action="cpanel.php?categ=3" method="post" enctype="multipart/form-data" runat="server" role="form">
							<input type="hidden" name="id_noticia" class="form-control" value="<?php echo $me; ?>">
							<div class="form-group">
								<label>Idioma</label>
								<select name="lenguaje" class="form-control" required>
									<option value="<?php print $lenguaje ?>"><?php print $lenguaje ?></option>
									<option value="Espanol">Español</option>
									<option value="Ingles">Ingles</option>
								</select>
								<label>Título</label>
								<input type='text' name='titulo' required class="form-control" value="<?php print $titulo ?>" /><br>

								<div class="d-flex">
									<div>
										<label>Imágen Principal</label>
										<input type='file' name='imagen' class="form-control" /><br>
									</div>
									<div>
										<?php if ($imagen) : ?>
											<img src="<?php echo 'galerias/noticias/' . $imagen; ?>" width="100px" id="image" alt="preview">
											<label for="control_img">Sin imagen</label>
											<input type="checkbox" name="control_img" id="control_img" <?php echo $imagen; ?>" onchange="$('#image').addClass('d-none');$(this).val('true');">
										<?php endif; ?>
									</div>
								</div>

								<br>

								<div class="d-flex">
									<div>
										<label>Imágen 1</label>
										<input type='file' name='imagen1' class="form-control" /><br>
									</div>
									<div>
										<?php if ($imagen1) : ?>
											<img src="<?php echo 'galerias/noticias/' . $imagen1; ?>" width="100px" id="image1" alt="preview">
											<label for="control_img1">Sin imagen</label>
											<input type="checkbox" name="control_img1" id="control_img1" <?php echo $imagen1; ?>" onchange="$('#image1').addClass('d-none');$(this).val('true');">
										<?php endif; ?>
									</div>
								</div>

								<div class="d-flex">
									<div>
										<label>Imágen 2</label>
										<input type='file' name='imagen2' class="form-control" /><br>
									</div>
									<div>
										<?php if ($imagen2) : ?>
											<img src="<?php echo 'galerias/noticias/' . $imagen2; ?>" width="100px" id="image2" alt="preview">
											<label for="control_img2">Sin imagen</label>
											<input type="checkbox" name="control_img2" id="control_img2" <?php echo $imagen2; ?>" onchange="$('#image2').addClass('d-none');$(this).val('true');">
										<?php endif; ?>
									</div>
								</div>

								<div class="d-flex">
									<div>
										<label>Imágen 3</label>
										<input type='file' name='imagen3' class="form-control" /><br>
									</div>
									<div>
										<?php if ($imagen3) : ?>
											<img src="<?php echo 'galerias/noticias/' . $imagen3; ?>" width="100px" id="image3" alt="preview">
											<label for="control_img3">Sin imagen</label>
											<input type="checkbox" name="control_img3" id="control_img3" <?php echo $imagen3; ?>" onchange="$('#image3').addClass('d-none');$(this).val('true');">
										<?php endif; ?>
									</div>
								</div>

								<label>Texto Artículo</label><br>
								<p>USO:
								<ul>
									<li>Para agregar links, primero pinte el texto a linkear luego toque el icono de link, lo mismo para cualquier opcion de formato de texto</li>
									<li>Para agregar imagenes, las mismas deben ser chicas y estar comprimidas, sino se rompe la pagina.</li>
								</ul>
								</p>
								<!-- Include stylesheet -->
								<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
								<!-- Create the toolbar container -->
								<div id="toolbar"></div>
								<!-- Create the editor container -->
								<div id="editor" class="editor">
									<?php echo ($descripcion) ? $descripcion : ''; ?>
								</div>

								<!-- Include the Quill library -->
								<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>

								<!-- Initialize Quill editor -->
								<script>
									var toolbarOptions = [
										[{
											'header': [1, 2, 3, 4, 5, 6, false]
										}],
										['bold', 'italic', 'underline', 'strike'], // toggled buttons
										['blockquote'],
										[{
											'align': []
										}],
										['link'],
										[{
											'list': 'ordered'
										}, {
											'list': 'bullet'
										}],
										//['image', 'link']
										//[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
										//[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
										//[{ 'font': [] }],
										//['blockquote', 'code-block'],
										//[{ 'header': 1 }, { 'header': 2 }],               // custom button values
										//[{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
										//[{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
										//[{ 'direction': 'rtl' }],                         // text direction
										//['clean']     // remove formatting button
									];
									var quill = new Quill('#editor', {
										modules: {
											toolbar: toolbarOptions
										},
										placeholder: 'Comience a editar aqui...',
										theme: 'snow'
									});
								</script>
								<textarea name="editor" type="hidden" id="c-editor" class="form-control d-none"></textarea>
							</div>
							<div class="form-group">
								<br>
								<input type="submit" name="submit" class="btn btn-primary" onClick="Ok();" value="<?php if (is_numeric($id_noticia)) print "Modificar - Update";
																													else print "Cargar - Insert"; ?>">
							</div>
						</form>
				<?php
						//***** PRENSA CODES *****//
						if (isset($_POST['submit']) && isset($_POST['id_noticia']) && !is_numeric($_POST['id_noticia'])) {
							$archivoimg = null;
							$archivoimg1 = null;
							$archivoimg2 = null;
							$archivoimg3 = null;
							if (isset($_FILES["imagen"]) && $_FILES["imagen"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen"]['size'];
								$tipo = $_FILES["imagen"]['type'];
								$archivo = $_FILES["imagen"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg = $destino;
							}

							if (isset($_FILES["imagen1"]) && $_FILES["imagen1"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen1"]['size'];
								$tipo = $_FILES["imagen1"]['type'];
								$archivo = $_FILES["imagen1"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen1']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg1 = $destino;
							}

							if (isset($_FILES["imagen2"]) && $_FILES["imagen2"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen2"]['size'];
								$tipo = $_FILES["imagen2"]['type'];
								$archivo = $_FILES["imagen2"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen2']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg2 = $destino;
							}

							if (isset($_FILES["imagen3"]) && $_FILES["imagen3"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen3"]['size'];
								$tipo = $_FILES["imagen3"]['type'];
								$archivo = $_FILES["imagen3"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen3']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg3 = $destino;
							}

							$datos = new Noticia();
							$datos->set1($fechaoperacion);
							$datos->set2($_POST['titulo']);
							$datos->set4($_POST['editor']);
							$datos->set5(0);
							$datos->set6($_POST['lenguaje']);
							if ($archivoimg) {
								$datos->set3($archivoimg);
							};
							if ($archivoimg1) {
								$datos->set7($archivoimg1);
							};
							if ($archivoimg2) {
								$datos->set8($archivoimg2);
							};
							if ($archivoimg3) {
								$datos->set9($archivoimg3);
							};
							$datos->insert();
							$datos->closeconexion();
							print "Registro Insertado Correctamente";
						}
						if (isset($_POST['submit']) && isset($_POST['id_noticia']) && is_numeric($_POST['id_noticia'])) {
							$archivoimg = null;
							$archivoimg1 = null;
							$archivoimg2 = null;
							$archivoimg3 = null;

							if (isset($_FILES["imagen"]) && $_FILES["imagen"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen"]['size'];
								$tipo = $_FILES["imagen"]['type'];
								$archivo = $_FILES["imagen"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg = $destino;
							}

							if (isset($_FILES["imagen1"]) && $_FILES["imagen1"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen1"]['size'];
								$tipo = $_FILES["imagen1"]['type'];
								$archivo = $_FILES["imagen1"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen1']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg1 = $destino;
							}

							if (isset($_FILES["imagen2"]) && $_FILES["imagen2"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen2"]['size'];
								$tipo = $_FILES["imagen2"]['type'];
								$archivo = $_FILES["imagen2"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen2']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg2 = $destino;
							}

							if (isset($_FILES["imagen3"]) && $_FILES["imagen3"]['size'] > 0) {
								$status = "";
								$tamano = $_FILES["imagen3"]['size'];
								$tipo = $_FILES["imagen3"]['type'];
								$archivo = $_FILES["imagen3"]['name'];
								$prefijo = substr(md5(uniqid(rand())), 0, 6);
								if ($archivo != "") {
									$destino = $prefijo . "_" . $archivo;
									if (copy($_FILES['imagen3']['tmp_name'], "galerias/noticias/" . $prefijo . "_" . $archivo)) {
										$status = "Archivo subido: <b>" . $archivo . "</b>";
									} else {
										$status = "Error al subir el archivo";
									}
								} else {
									$status = "Error al subir archivo";
								}
								$archivoimg3 = $destino;
							}

							$datos = new Noticia($_POST['id_noticia']);
							$datos->set1($fechaoperacion);
							$datos->set2($_POST['titulo']);
							$datos->set4($_POST['editor']);
							$datos->set5(0);
							$datos->set6($_POST['lenguaje']);
							if ($archivoimg || $_POST['control_img']) {
								$datos->set3($archivoimg);
							};
							if ($archivoimg1 || $_POST['control_img1']) {
								$datos->set7($archivoimg1);
							};
							if ($archivoimg2 || $_POST['control_img2']) {
								$datos->set8($archivoimg2);
							};
							if ($archivoimg3 || $_POST['control_img3']) {
								$datos->set9($archivoimg3);
							};
							$datos->update();
							$datos->closeconexion();
							print "Registro Actualizado Correctamente";
						}
						if (isset($_GET['ee']) && is_numeric($_GET['ee'])) {
							$datos = new Noticia();
							$datos->delete($_GET['ee']);
							$datos->closeconexion();
							print "Registro Eliminado";
						}
						//************************TABLE PRENSA***********************************//
						echo "</div>"
							. "<br><br><br><br><div class='col-xs-12 col-sm-6 tabla-prensa'>";
						$datos = new Noticia();
						$date = $datos->getCpanel(); // obtiene todos los clientes para despues mostrarlos
						print '<table class="table table-striped">'
							. '<tr>'
							. '<td><b>#</b></td>'
							. '<td><b>Fecha</b></td>'
							. '<td><b>Título</b></td>'
							. '<td></td>'
							. '<td></td></tr>';
						while ($row = $date->fetch_array()){
							print '<tr>'
								. '<td>' . $row['id_noticia'] . '</td>'
								. '<td>' . $row['atributo1'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td><a href="cpanel.php?categ=3&me=' . $row['id_noticia'] . '" style="color:orange; text-decoration:none;"><img src="img/edit.png" title="Modificar"></a></td>'
								. '<td><a href="cpanel.php?categ=3&ee=' . $row['id_noticia'] . '" style="color:red; text-decoration:none;"><img src="img/trash.png" title="Eliminar"></a></td>'
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
	</div>
</section>

<!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>-->
<script languaje="javascript">
	function Ok() {
		//nicEditors.findEditor('editor').saveContent();
		document.getElementById("c-editor").value = $('.ql-editor').html();
		document.formNews.submit();
	}
</script>