<div class="ficha-docente">
	<div class="cabecera-ficha-docente">
		<div class="titulo-ficha">
			<h5>Ficha Docente</h5>
		</div>
		<div class="btn-atras">
			<a href="<?= base_url('index.php/admin/Docente') ?>"><i class="fas fa-arrow-circle-left"></i></a>
		</div>
	</div>
	<?php foreach ($resultado as $key): ?>
		
	
	<form action="EditarDocente" method="POST">
		<div>
			<label for="">Nombre:
				<input type="text" name="p_nombre" value="<?= $key->p_nombre_d ?>" style='width: 23%' readonly id="p_nombre_d" onfocus="limpiardocente(this);" onblur='llenardocente(this);'>
				<input type="text" name="s_nombre" value="<?= $key->s_nombre_d ?>" style='width: 23%' readonly id="s_nombre_d" onfocus="limpiardocente(this);" onblur='llenardocente(this);'>
			</label>

			<label>Apellidos:
				<input type="text" name="p_apellido_d" value="<?=$key->p_apellido_d?>" style='width: 23%' readonly id="p_apellido_d" onfocus="limpiardocente(this);" onblur='llenardocente(this);'>
				<input type="text" name="s_apellido_d" value="<?=$key->s_apellido_d?>" style='width: 23%' readonly id="s_apellido_d" onfocus="limpiardocente(this);" onblur='llenardocente(this);'>
			</label>
		</div>
		<div>
			<label for="">Cedula:
				<input type="text" name="ci_d" value="<?=$key->ci_d?>" style='width: 23%' readonly id="cedula_d" onfocus="limpiardocente(this);" onblur='llenardocente(this);'>
			</label>
			<label>Fecha Nacimiento:
				<input type="date" name="f_n" value="<?=$key->f_nacimiento_d?>" readonly id="nacimiento_d" onfocus="limpiardocente(this);" onblur='llenardocente(this);'>
			</label>
		</div>
		<div>
			<label for="" style="display: flex; flex-direction: row; margin: auto;">Telefono:
				<input type="text" value="<?=$key->codigo?>" style='width: 15%' readonly id="codigo_d">
				<select name="codigo" id="select_codigo_d" style="display: none; height: 35px; width: 65px;">
					<option disabled="true">Codigo Actual</option>
					<option value="<?=$key->id_codigo?>"><?=$key->codigo?></option>

					<option disabled="true">Nuevo Codigo</option>
					<?php foreach ($codigos as $codigo): ?>
						<option value="<?=$codigo->id_codigo?>"><?=$codigo->codigo?></option>
					<?php endforeach ?>
				</select>
				<input type="text" name="telefono" value="<?=$key->telefono_d?>" style='width: 23%' readonly onfocus="limpiardocente(this);" onblur='llenardocente(this);' id="tel_d">
			</label>
			<label style="display: flex; flex-direction: row; margin: auto;">Dirección
				<textarea name="direccion_d" id="dir" readonly="true"><?=$key->direccion_d?></textarea>
			</label>
		</div>
		<div id="footer-ficha-docente">
			<div class="boton-ficha-docente">
				<div id="caja-boton-eliminar-docente" style="display: none;">
					<a href="EliminarDocente?id=<?= $key->id_docente ?>" id="eliminar-ficha-docente">Eliminar</a>
				</div>
				<div id="caja-boton-editar-docente" style="display: none;">
					<button type='submit' id="editar-ficha-docente">Editar</button>
				</div>
			</div>
			<div class="checkbox-ficha-docente">
				<label id="label-edi">Editar
					<input type="checkbox" id="check-editar-docente" onchange ="docentemostrar()">
				</label>
				<label id="label-eli">Eliminar
					<input type="checkbox" id="check-eliminar-docente" onchange="docentemostrar()">
				</label>
			</div>
		</div>
		<input type="text" name="id" value="<?=$key->id_docente?>" style="display: none;">
	</form>

	<?php endforeach ?>
</div>