<div class="contenedor_menu">
	<div>
		<a href="<?= base_url('index.php/admin/RegistroEstudiante') ?>"><span><i class="fas fa-user-plus"></i></span> Estudiante</a>
	</div>
	<div>
		<a href="<?= base_url('index.php/admin/RegistroDocente') ?>"><span><i class="fas fa-user-plus"></i></span> Docente</a>
	</div>
	<div>
		<a href="<?= base_url('index.php/admin/Documentos') ?>"><span><i class="fas fa-file-download"></i></span> Documentos</a>
	</div>
		<?php if (isset($_GET['d_registrado'])): ?>
			<p style="text-align: center; color: red;">Docente Registrado</p>
		<?php endif ?>
		<?php if (isset($_GET['e_registrado'])): ?>
			<p style="text-align: center; color: red;">Estudiante Registrado</p>
		<?php endif ?>
</div>