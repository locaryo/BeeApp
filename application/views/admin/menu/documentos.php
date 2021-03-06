<div class="cuerpo_documento">
	<form method="POST">
		<div class="entrada">
			<label for="">Ingrese la Cedula del Alumno:
				<input type="text" name="cedula" style="width: 30%; text-align: center;">
			</label>
		</div>
		<div class="botones">
			<button type="submit" formaction="<?= base_url('index.php/admin/Constancia') ?>">Constancia Estudiantil</button>
			<button type="submit" formaction="<?= base_url('index.php/admin/ConstanciaInscripcion') ?>">Constancia de Inscripcion</button>
			<button type="submit" formaction="<?= base_url('index.php/admin/ConstanciaRetiro') ?>">Constancia de Retiro</button>
		</div>
	</form>
</div>