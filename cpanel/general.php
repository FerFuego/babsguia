<section id="Cpanel">
	<div class="container"><br>
		<div class="alert alert-info">Aclaración para el uso del CPanel: <br> En ningún caso deberá ingresar caracteres extraños, en el caso de textos en ingles no colocar el apóstrofe, utilice un acento u otro para tal fin, de lo contrario no se cargará el registro.</div>
		<?php
		if (isset($_GET['em']) && is_numeric($_GET['em'])) {
			$datos = new Tour();
			$datos->delete($_GET['em']);
			$close = $datos->closeconexion();
			print "Registro Eliminado";
		}
		if (isset($_GET['ee']) && is_numeric($_GET['ee'])) {
			$datos = new Servicio();
			$datos->delete($_GET['ee']);
			$close = $datos->closeconexion();
			print "Registro Eliminado";
		}
		if (isset($_GET['edu']) && is_numeric($_GET['edu'])) {
			$datos = new Noticia();
			$datos->delete($_GET['edu']);
			$close = $datos->closeconexion();
			print "Registro Eliminado";
		}
		if (isset($_GET['nue']) && is_numeric($_GET['nue'])) {
			$datos = new Nuevo();
			$datos->delete($_GET['nue']);
			$close = $datos->closeconexion();
			print "Registro Eliminado";
		}
		if (isset($_GET['eli']) && is_numeric($_GET['eli'])) {
			$datos = new Link();
			$datos->delete($_GET['eli']);
			$close = $datos->closeconexion();
			print "Registro Eliminado";
		}
		if (isset($_GET['ecu']) && is_numeric($_GET['ecu'])) {
			$datos = new Producto();
			$datos->delete($_GET['ecu']);
			$close = $datos->closeconexion();
			print "Registro Eliminado";
		}
		?>
		<div class="row mt-5">
			<h5 class="text-info"><span class="fa fa-hand-o-right"></span>Tabla Tours</h5>
			<hr>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tabla_control">
				<?php
				$public = new Tour();
				$result = $public->get();
				if ($result->num_rows == 0) :
					echo '<div class="alert alert-warning"> 0 Registros!</div>';
				else :
				?>
					<table class="table table-striped table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>#</b></td>
								<td><b>Nombre</b></td>
								<td><b>Categoria</b></td>
								<td><b>Días y Horarios</b></td>
								<td><b>Duración</b></td>
								<td><b>Precio</b></td>
								<td></td>
							</tr>
						<?php
						while ($row = $result->fetch_array()) :
							echo '<tr>'
								. '<td>' . $row['id_tour'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td>' . $row['atributo1'] . '</td>'
								. '<td>' . $row['atributo6'] . '</td>'
								. '<td>' . $row['atributo7'] . '</td>'
								. '<td>$' . $row['atributo5'] . '</td>'
								. '<td><a href="javascript:;" onClick="deleteMedico(' . $row['id_tour'] . ')" title="Eliminar"><img src="img/trash.png"></a></td>'
								. '</tr>';
						endwhile;
						$public->closeconexion();
					endif;
						?>
						</tbody>
					</table>
			</div>
		</div>
		<div class="row mt-5">
			<br><br>
			<h5 class="text-info"><span class="fa fa-hand-o-right"></span>Tabla Novedades</h5>
			<hr>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tabla_control">
				<?php
				$public = new Noticia();
				$result = $public->get();
				if ($result->num_rows == 0) :
					echo '<div class="alert alert-warning"> 0 Registros!</div>';
				else :
				?>
					<table class="table table-striped table-hover">
						<tbody>
							<tr>
								<td><b>#</b></td>
								<td><b>Fecha</b></td>
								<td><b>Título</b></td>
								<td></td>
							</tr>
						<?php
						while ($row = $result->fetch_array()) :
							echo '<tr>'
								. '<td>' . $row['id_noticia'] . '</td>'
								. '<td>' . $row['atributo1'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td><a href="javascript:;" onClick="deleteEducacion(' . $row['id_noticia'] . ')" title="Eliminar"><img src="img/trash.png"></a></td>'
								. '</tr>';
						endwhile;
						$public->closeconexion();
					endif;
						?>
						</tbody>
					</table>
			</div>
		</div>
		<div class="row mt-5">
			<br><br>
			<h5 class="text-info"><span class="fa fa-hand-o-right"></span>Tabla Links</h5>
			<hr>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tabla_control">
				<?php
				$public = new Link();
				$result = $public->get();
				if ($result->num_rows == 0) :
					echo '<div class="alert alert-warning"> 0 Registros!</div>';
				else :
				?>
					<table class="table table-striped table-hover table-responsive">
						<tbody>
							<tr>
								<td><b>#</b></td>
								<td><b>Fecha</b></td>
								<td><b>Título</b></td>
								<td><b>Link</b></td>
								<td></td>
							</tr>
						<?php
						while ($row = $result->fetch_array()) :
							echo '<tr>'
								. '<td>' . $row['id_link'] . '</td>'
								. '<td>' . $row['atributo1'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td>' . $row['atributo4'] . '</td>'
								. '<td><a href="javascript:;" onClick="deleteLibro(' . $row['id_link'] . ')" title="Eliminar"><img src="img/trash.png"></a></td>'
								. '</tr>';
						endwhile;
						$public->closeconexion();
					endif;
						?>
						</tbody>
					</table>
			</div>
		</div>
		<div class="row mt-5">
			<br><br>
			<h5 class="text-info"><span class="fa fa-hand-o-right"></span>Tabla Productos</h5>
			<hr>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tabla_control">
				<?php
				$public = new Producto();
				$result = $public->get();
				if ($result->num_rows == 0) :
					echo '<div class="alert alert-warning"> 0 Registros!</div>';
				else :
				?>
					<table class="table table-striped table-hover">
						<tbody>
							<tr>
								<td><b>#</b></td>
								<td><b>Título</b></td>
								<td><b>Precio</b></td>
								<td></td>
							</tr>
						<?php
						while ($row = $result->fetch_array()) :
							echo '<tr>'
								. '<td>' . $row['id_productos'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td>$' . $row['atributo5'] . '</td>'
								. '<td><a href="javascript:;" onClick="deleteCurso(' . $row['id_productos'] . ')" title="Eliminar"><img src="img/trash.png"></a></td>'
								. '</tr>';
						endwhile;
						$public->closeconexion();
					endif;
						?>
						</tbody>
					</table>
			</div>
		</div>
		<div class="row mt-5">
			<br><br>
			<h5 class="text-info"><span class="fa fa-hand-o-right"></span>Tabla Nuevos</h5>
			<hr>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 tabla_control">
				<?php
				$public = new Nuevo();
				$result = $public->get();
				if ($result->num_rows == 0) :
					echo '<div class="alert alert-warning"> 0 Registros!</div>';
				else :
				?>
					<table class="table table-striped table-hover">
						<tbody>
							<tr>
								<td><b>#</b></td>
								<td><b>Fecha</b></td>
								<td><b>Título</b></td>
								<td></td>
							</tr>
						<?php
						while ($row = $result->fetch_array()) :
							echo '<tr>'
								. '<td>' . $row['id_nuevo'] . '</td>'
								. '<td>' . $row['atributo1'] . '</td>'
								. '<td>' . $row['atributo2'] . '</td>'
								. '<td><a href="javascript:;" onClick="deleteNuevo(' . $row['id_nuevo'] . ')" title="Eliminar"><img src="img/trash.png"></a></td>'
								. '</tr>';
						endwhile;
						$public->closeconexion();
					endif;
						?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
</section>