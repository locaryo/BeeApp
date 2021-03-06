<div class="cuerpo-registro-docente">
	<div>
		<h3>Registrar Docente</h3>
	</div>
	<div class="contenedor-form">
		<form action="NuevoDocente" method="POST" id="form_d" onsubmit="retunr validacionFormD();">
			<div>
				<label for="">Nombres:
					<input type="text" name="p_nombre" onfocus="LimpiarForm(this)" id="p_nombre_d">
					<input type="text" name="s_nombre" onfocus="LimpiarForm(this)" id="s_nombre_d">
				</label>
				<label for="">Apellidos:
					<input type="text" name="p_apellido" onfocus="LimpiarForm(this)" id="p_apellido_d">
					<input type="text" name="s_apellido" onfocus="LimpiarForm(this)" id="s_apellido_d">
				</label>
			</div>
			<div>
				<label for="">Cedula:
					<input type="text" name="ci" onfocus="LimpiarForm(this)" id="ci_do">
				</label>
				<label for="">Fecha de Nacimiento:
					<input type="date" name="nacimiento">
				</label>
				<label>Sexo:
					<select name="sexo">
						<option value="0" readonly>--</option>
						<?php foreach ($sexo as $key): ?>
						<option value="<?=$key->id_sexo?>"><?=$key->sexo?></option>
						<?php endforeach ?>
					</select>
				</label>
			</div>
			<div>
				<label for="">Numero de Telefono:
					<select name="codigo">
						<option value="0" readonly>--</option>
						<?php foreach ($codigos as $key): ?>
						<option value="<?=$key->id_codigo?>"><?=$key->codigo?></option>
						<?php endforeach ?>
					</select>
					<input type="text" name="telefono" onfocus="LimpiarForm(this)" id="tel_d">
				</label>
				<label for="">Dirección:
					<textarea name="dir" onfocus="LimpiarForm(this)" id="dir_d"></textarea>
				</label>
			</div>
			<div class="footer_registro_docente">
				<button type="submit">Registrar</button>
				<a href="<?= base_url('index.php/admin/Menu') ?>">Cerrar</a>
			</div>
		</form>
	</div>
</div>