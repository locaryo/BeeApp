<div class="ficha-estudiante">
	<div id="cabecera-ficha">
		<div>
			<h5>Ficha Estudiante</h5>
		</div>
		<div>
			<a href="<?= base_url('index.php/admin/Estudiante') ?>"><i class="fas fa-arrow-circle-left"></i></a>
		</div>
	</div>
	<?php foreach ($result as $key): ?>
	
	<form id="form-ficha-estudiante" action="EditarEstudiante" method="POST">
		<div>
			<label for="" class="nombres">Nombres:
				<input type="text" value="<?= $key->p_nombre_e ?>" readonly id="primer-n" style="width:23%;" onfocus='limpiar(this);' onblur='llenar(this);' name='p_nombre'>
				<input type="text" value="<?= $key->s_nombre_e ?>" readonly id="segundo-n" style="width:23%;" onfocus='limpiar(this);' onblur='llenar(this);' name='s_nombre'>
			</label>
			
			<label for="" class="apellidos">Apellidos:
				<input type="" name="p_apellido" value="<?= $key->p_apellido_e ?>" readonly id="primer-a" style="width:23%;" onfocus='limpiar(this);' onblur='llenar(this);' >
				<input type="" name="s_apellido" value="<?= $key->s_apellido_e ?>" readonly id="segundo-a" style="width:23%;" onfocus='limpiar(this);' onblur='llenar(this);' >
			</label>
			
			<label for="">Cedula:
				<input type="text" value="<?= $key->ci_e ?>" readonly id="ci-e" style="width: 23%;" onfocus='limpiar(this);' onblur='llenar(this);' name="cedula">
			</label>
			
		</div>
		<div>
			<label for="">Fecha Nacimiento:
				<input type="date" value="<?= $key->f_nacimiento_e ?>" readonly id="nacimiento-e" onfocus='limpiar(this);' onblur='llenar(this);' name='nacimiento'>
			</label>
			
			<label for="" class="telefono" style="display: flex; flex-direction: row; margin: auto;">Telefono:
				<input type="text" value="<?= $key->codigo ?>" readonly id="codigo-e" style="width: 15%;">
				<select name="codigo" id="select-codigo" style="display: none; height: 35px; width: 65px;">
						<option disabled="true">Codigo Actual</option>
						<option value="<?= $key->id_codigo ?>"><?= $key->codigo ?></option>

						<option disabled="true">Nuevo Codigo</option>
						<?php foreach ($codigos as $codigo): ?>
						<option value="<?= $codigo->id_codigo ?>"><?= $codigo->codigo ?></option>
						<?php endforeach ?>
				</select>
				<input type="text" name="telefono" value="<?= $key->telefono ?>" readonly id="tel-e" style="width: 23%;" onfocus='limpiar(this);' onblur='llenar(this);'>
			</label>
			
			<label for="" class="representante">Mencion:
				<input type="text" readonly id="mencion" value="<?= $key->mencion ?>" style="width: 35%;">
				<select name="mencion" style="display: none;" id="select-mencion">
					<option disabled="true">Mencion Actual</option>
					<option value="<?= $key->id_mencion ?>"><?= $key->mencion ?></option>

					<option disabled="true">Nueva Mencion</option>
					<?php foreach ($menciones as $mencion): ?>
						<option value="<?=$mencion->id_mencion?>"><?=$mencion->mencion?></option>
					<?php endforeach ?>
				</select>
			</label>
			
		</div>
		<div>
			<label for="" class="profesor">Profesor Guia:
				<input type="text" value="<?= $key->p_nombre_d ?>" style="width: 25%;" readonly id="nombre-profesor-e">
				<input type="text" value="<?= $key->p_apellido_d ?>" style="width: 25%;" readonly id="apellido-profesor-e">
			</label>
			
			<label for="">Año:
				<input type="text" value="<?= $key->curso ?>" readonly id="curso" style="width: 19%;">
				<select id="select-curso" style="display: none;" name="curso">
						<option disabled="true">Año Actual</option>
						<option value="<?= $key->id_curso ?>"><?= $key->curso ?></option>
			
						<option disabled="true">Nuevo Año</option>
						<?php foreach ($cursos as $curso): ?>
						<option value="<?= $curso->id_curso ?>"><?= $curso->curso ?></option>
						<?php endforeach ?>
				</select>
			</label>
			
			<label for="">Seccion:
				<input type="text" value="<?= $key->seccion ?>" readonly id="seccion" style="width: 19%;">
				<select id="select-seccion" style="display: none;" name="seccion">
						<option disabled="true">Seccion Actual</option>
						<option value="<?= $key->id_seccion ?>"><?= $key->seccion ?></option>
					
						<option disabled="true">Nueva Seccion</option>
						<?php foreach ($secciones as $seccion): ?>
						<option value="<?= $seccion->id_seccion ?>"><?= $seccion->seccion ?></option>
						<?php endforeach ?>
				</select>
			</label>
			
		</div>
		<div>
			<label for="">Turno:
				<input type="" value="<?= $key->Turno ?>" readonly id="turno" style="width: 29%;">
				<select id="select-turno" style="display: none;" name='turno'>
					<option disabled="true">Turno Actual</option>
					<option value="<?= $key->id_turno ?>"><?= $key->Turno ?></option>

					<option disabled="true">Nuevo Turno</option>
					<?php foreach ($turnos as $tu): ?>
					<option value="<?= $tu->id_turno ?>"><?= $tu->Turno ?></option>
					<?php endforeach ?>
				</select>
			</label>

			
			<label for="">Direccion:
				<textarea readonly id="textarea" name="textarea"><?= $key->direccion ?></textarea>
			</label>
			<label for="">Edad:
				<input type="text" name="edad" value="<?=$key->edad?>" style="width: 13%;" readonly id="edad" onfocus='limpiar(this);' onblur='llenar(this);'>
			</label>
		</div>
		<div>

			<label for="" style="display: flex; flex-direction: row; margin: auto;">Partida Nacimiento:
				<input type="radio" <?php if ($key->id_partida == 1): ?>
				checked ='true'
				<?php endif ?> disabled id="pn">
				<select name="partida_nacimiento" id="select-nacimiento" style="display: none;">
					<option disabled="true">Seleccion</option>
					<option value="<?= $key->id_partida ?>"><?= $key->partida ?></option>

					<option disabled="true">Nueva Seleccion</option>
					<?php foreach ($nacimiento as $na): ?>
					<option value="<?= $na->id_partida ?>"><?= $na->partida ?></option>
					<?php endforeach ?>
				</select>
			</label>
			
			<label for="" style="display: flex; flex-direction: row; margin: auto;">Fotos Estudiante:
				<input type="radio" <?php if ($key->id_foto_e == 1): ?>
				checked ='true'
				<?php endif ?> disabled id="foto-e">
				<select name="foto_e" id="select-foto-e" style="display: none;">
					<option disabled="true">Seleccion</option>
					<option value="<?= $key->id_foto_e ?>"><?= $key->foto_e ?></option>

					<option disabled="true">Nueva Seccion</option>
					<?php foreach ($fotos_e as $foto_e): ?>
					<option value="<?= $foto_e->id_foto_e ?>"><?= $foto_e->foto_e ?></option>
					<?php endforeach ?>
				</select>
			</label>

			<label for="" style="display: flex; flex-direction: row; margin: auto;">Fotos Representante:
				<input type="radio" <?php if ($key->id_foto_r == 1): ?>
				checked ='true'
				<?php endif ?> disabled id="foto-r">
				<select name="foto_r" id="select-foto-r" style="display: none;">
					<option disabled="true">Seleccion</option>
					<option value="<?= $key->id_foto_r ?>"><?= $key->foto_r ?></option>

					<option disabled="true">Nueva Seccion</option>
					<?php foreach ($fotos_r as $foto_r): ?>
					<option value="<?= $foto_r->id_foto_r ?>"><?= $foto_r->foto_r ?></option>
					<?php endforeach ?>
				</select>
			</label>

			<label for="" style="display: flex; flex-direction: row; margin: auto;">Carta Vacunación:
				<input type="radio" <?php if ($key->id_carta == 1): ?>
				checked = 'true'
				<?php endif ?> disabled id="c_vacunacion">
				<select name="c_vacunacion" id="select-c-vacunacion" style="display: none;">
					<option disabled="true">Seleccion</option>
					<option value="<?= $key->id_carta ?>"><?= $key->carta_vacunacion ?></option>

					<option disabled="true">Nueva Seccion</option>
					<?php foreach ($cartas_v as $c_vacunacion): ?>
					<option value="<?= $c_vacunacion->id_carta ?>"><?= $c_vacunacion->carta_vacunacion ?></option>
					<?php endforeach ?>
				</select>
			</label>

			<label for="" style="display: flex; flex-direction: row; margin: auto;">Certificado 6to:
				<input type="radio" <?php if ($key->id_certificado == 1): ?>
				checked = 'true'
				<?php endif ?> disabled id="certificado">
				<select name="certificado" id="select-certificado" style="display: none;">
					<option disabled="true">Seleccion</option>
					<option value="<?= $key->id_certificado ?>"><?= $key->certificado ?></option>

					<option disabled="true">Nueva Seccion</option>
					<?php foreach ($certificados as $certificado): ?>
					<option value="<?= $certificado->id_certificado ?>"><?= $certificado->certificado ?></option>
					<?php endforeach ?>
				</select>
			</label>

			<label for="" style="display: flex; flex-direction: row; margin: auto;">Notas Certificadas:
				<input type="radio" <?php if ($key->id_notas == 1): ?>
				checked = 'true'
				<?php endif ?> disabled id="notas">
				<select name="notas" id="select-notas" style="display: none;">
					<option disabled="true">Seleccion</option>
					<option value="<?= $key->id_notas ?>"><?= $key->notas ?></option>

					<option disabled="true">Nueva Seccion</option>
					<?php foreach ($notas as $nota): ?>
					<option value="<?= $nota->id_notas ?>"><?= $nota->notas ?></option>
					<?php endforeach ?>
				</select>
			</label>

		</div>
		<div id="footer-ficha-estudiante">
			<div class="boton-ficha">
				<div id="caja-boton-eliminar" style="display: none;">
					<a href="EliminarEstudiante?id=<?= $key->id_alumno ?>" id="eliminar-ficha-estudiante">Eliminar</a>
				</div>
				<div id="caja-boton-editar" style="display: none;">
					<button type='submit' id="editar-ficha-estudiante">Editar</button>
				</div>
			</div>
			<div class="checkbox-ficha-estudiante">
				<label id="label-edi">Editar
					<input type="checkbox" id="check-editar" onchange ="mostrar()">
				</label>
				<label id="label-eli">Eliminar
					<input type="checkbox" id="check-eliminar" onchange="mostrar()">
				</label>
			</div>
		</div>
		<input type="text" style="display: none;" value="<?= $key->id_alumno ?>" name='id'>
	</form>
	<?php endforeach ?>
</div>