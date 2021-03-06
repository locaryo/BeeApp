<div class="contenedor-registro-e">
	<div class="titulo"><h3>Registro Estudiante</h3></div>
	<form action="NuevoEstudiante" class="formulario-registro" method="POST" id="form_e" onsubmit="return ValidacionFormE();">
		<div class="alto">
			<label for="">
				Nombres:
				<input type="text" name="p_nombre" id="p_nombre_e" style="width: 12%;" onfocus="LimpiarForm(this)">
				<input type="text" name="s_nombre" id="s_nombre_e" style="width: 12%;" onfocus="LimpiarForm(this)">
			</label>
		
			<label for="">
				Apellidos:
				<input type="text" name="p_apellido" id="p_apellido_e" style="width: 12%;" onfocus="LimpiarForm(this)">
				<input type="text" name="s_apellido" id="s_apellido_e" style="width: 12%;" onfocus="LimpiarForm(this)">
			</label>
		
			<label>
				Cedula:
				<input type="text" name="ci" style="width: 12%;" id="ci_e" onfocus="LimpiarForm(this)">
			</label>
		
			<label>
				Fecha Nacimiento:
				<input type="date" name="nacimiento">
			</label>
			<label for="">
				CI Docente:
				<input type="text" name="docente_ci" style="width: 12%;" id="ci_d" onfocus="LimpiarForm(this)">
			</label>
			<label for="">
				Edad:
				<input type="text" name="edad" style="width: 5%;" id="ci_d" onfocus="LimpiarForm(this)">
			</label>
		</div>
		<div class="medio">
			<label for="">
				Telefono:
				<select name="codigo">
					<option value="NULL">--</option>
					<?php foreach ($codigos as $codigo): ?>
						<option value="<?=$codigo->id_codigo?>"><?=$codigo->codigo?></option>
					<?php endforeach ?>
				</select>
				
				<input type="text" name="telefono" style="width: 12%;" id="tel_e" onfocus="LimpiarForm(this)">
			</label>

			<label for="">
				Sexo:
				<select name="sexo">
					<option value="NULL">--</option>
					<?php foreach ($sexos as $sexo): ?>
						<option value="<?=$sexo->id_sexo?>"><?=$sexo->sexo?></option>
					<?php endforeach ?>
				</select>
			</label>
		
			<label for="">
				Direccion:
				<textarea cols="20" rows="2" name="dir" id="dir_e" onfocus="LimpiarForm(this)"></textarea>
			</label>
		</div>
		<div class="hasan">
			
			<labe>
				Curso:
				<select name="curso">
					<option value="NULL">--</option>
					<?php foreach ($cursos as $curso): ?>
						<option value="<?=$curso->id_curso?>"><?=$curso->curso?></option>
					<?php endforeach ?>
					
				</select>
			</labe>
		
			<labe>
				Seccion:
				<select name="seccion">
					<option value="NULL">--</option>
					<?php foreach ($secciones as $seccion): ?>
						<option value="<?=$seccion->id_seccion?>"><?=$seccion->seccion?></option>
					<?php endforeach ?>
				</select>
			</labe>
			
			<labe>
				Turno:
				<select name="turno">
					<option value="NULL">--</option>
					<?php foreach ($turnos as $turno): ?>
						<option value="<?=$turno->id_turno?>"><?=$turno->Turno?></option>
					<?php endforeach ?>
				</select>
			</labe>
		
			<label>
				Mencion:
				<select name="mencion">
					<option value="NULL">--</option>
					<?php foreach ($menciones as $mencion): ?>
						<option value="<?=$mencion->id_mencion?>"><?=$mencion->mencion?></option>
					<?php endforeach ?>
				</select>
			</label>
		</div>
		<!--Documentos-->
		<div class="abdul">
			<label>
				Notas:
				<select name="notas">
					<option value="NULL">--</option>
					<?php foreach ($notas as $nota): ?>
						<option value="<?=$nota->id_notas?>"><?=$nota->notas?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				Partida de nacimiento:
				<select name="p_nacimiento">
					<option value="NULL">--</option>
					<?php foreach ($nacimiento as $partida): ?>
						<option value="<?=$partida->id_partida?>"><?=$partida->partida?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				Foto Estudiante:
				<select name="foto_e">
					<option value="NULL">--</option>
					<?php foreach ($fotos_e as $foto_e): ?>
						<option value="<?=$foto_e->id_foto_e?>"><?=$foto_e->foto_e?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				Foto Representante:
				<select name="foto_r">
					<option value="NULL">--</option>
					<?php foreach ($fotos_r as $foto_r): ?>
						<option value="<?=$foto_r->id_foto_r?>"><?=$foto_r->foto_r?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				Carta de Vacunacion:
				<select name="c_vacunacion">
					<option value="NULL">--</option>
					<?php foreach ($carta_v as $carta): ?>
						<option value="<?=$carta->id_carta?>"><?=$carta->carta_vacunacion?></option>
					<?php endforeach ?>
				</select>
			</label>
			<label>
				Certificado:
				<select name="certificado">
					<option value="NULL" readonly>--</option>
					<?php foreach ($certificados as $certificado): ?>
						<option value="<?=$certificado->id_certificado?>"><?=$certificado->certificado?></option>
					<?php endforeach ?>
				</select>
			</label>
		</div>
		<div class="boton">
			<button type="submit">Registrar</button>
			<a href="<?= base_url('index.php/admin/Menu') ?>">Cerrar</a>
		</div>
	</form>
</div>