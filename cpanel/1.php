<?php
$fechaoperacion = date('d-m-Y');
$id_link = "";
$fecha = "";
$titulo = "";
$imagen = "";
$link = "";
$lenguaje = "";
$me = "";
if (isset($_GET['me'])) {
	$datos = new Link($_GET['me']);
	$id_link = $datos->getID();
	$fecha = $datos->get1();
	$titulo = $datos->get2();
	$link = $datos->get4();
	$lenguaje = $datos->get6();
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
						<h2>Cargar Link</h2>
						<hr />
						<form class="form-inline" action="cpanel.php?categ=1" method="post" enctype="multipart/form-data" runat="server" role="form">
							<input type="hidden" name="id_link" class="form-control" value="<?php echo $me ?>">
							<div class="form-group">
								<label>Idioma</label>
								<select name="lenguaje" class="form-control" required>
									<option value="<?php print $lenguaje ?>"><?php print $lenguaje ?></option>
									<option value="Espanol">Español</option>
									<option value="Ingles">Ingles</option>
								</select>
								<label>Título</label>
								<input type='text' name='titulo' required class="form-control" value="<?php print $titulo ?>" /><br>
								<label>Link</label><br>
								<input type='text' name='link' required class="form-control" value="<?php print $link ?>" /><br>
							</div>
							<div class="form-group">
								<br>
								<input type="submit" name="submit" class="btn btn-primary" value="<?php if (is_numeric($id_link)) print "Modificar - Update";
																									else print "Cargar - Insert"; ?>">
							</div>
						</form>
				<?php
						//***** PRENSA CODES *****//
						if (isset($_POST['submit']) && isset($_POST['id_link']) && !is_numeric($_POST['id_link'])) {
							$datos = new Link();
							$datos->set1($fechaoperacion);
							$datos->set2($_POST['titulo']);
							$datos->set3(0);
							$datos->set4($_POST['link']);
							$datos->set5(0);
							$datos->set6($_POST['lenguaje']);
							$datos->set7(0);
							$datos->set8(0);
							$datos->set9(0);
							$datos->insert();
							$datos->closeconexion();
							print "Registro Insertado Correctamente";
						}
						if (isset($_POST['submit']) && isset($_POST['id_link']) && is_numeric($_POST['id_link'])) {
							$datos = new Link($_POST['id_link']);
							$datos->set1($fechaoperacion);
							$datos->set2($_POST['titulo']);
							$datos->set3(0);
							$datos->set4($_POST['link']);
							$datos->set5(0);
							$datos->set6($_POST['lenguaje']);
							$datos->set7(0);
							$datos->set8(0);
							$datos->set9(0);
							$datos->update();
							$datos->closeconexion();
							print "Registro Actualizado Correctamente";
						}
						if (isset($_GET['ee']) && is_numeric($_GET['ee'])) {
							$datos = new Link();
							$datos->delete($_GET['ee']);
							$close = $datos->closeconexion();
							print "Registro Eliminado";
						}
						//************************TABLE PRENSA***********************************//
						echo "</div>"
							. "<br><br><div class='col-xs-12 col-sm-6 tabla-prensa'><br><br>";
						$datos = new Link();
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
								. '<td>' . $row['id_link'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td>' . $row['atributo4'] . '</td>'
								. '<td><a href="cpanel.php?categ=1&me=' . $row['id_link'] . '" style="color:orange; text-decoration:none;"><img src="img/edit.png" title="Modificar"></a></td>'
								. '<td><a href="cpanel.php?categ=1&ee=' . $row['id_link'] . '" style="color:red; text-decoration:none;"><img src="img/trash.png" title="Eliminar"></a></td>'
								. '</tr>';
						}
						print '</table>';
						$close = $datos->closeconexion();
					else : echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head><body><div class="aviso_session">Inicia session!</div><div id="espacio_gallery"></div></body></html>';
					endif;
				else : echo '<html><head><meta http-equiv="REFRESH" content="0; url=index.php"></head><body><div class="aviso_session">Inicia session!</div><div id="espacio_gallery"></div></body></html>';
				endif ?>
			</div>
		</div>
	</div>
	</div>
</section>