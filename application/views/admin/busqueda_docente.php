<div class="form_busqueda">
	<?php if (isset($_GET['error'])): ?>
		<h3 style="margin-bottom: 50px; color: red;">Docente no encontrado</h3>
	<?php endif ?>
	<?php if (isset($_GET['editado'])): ?>
		<h3 style="margin-bottom: 50px; color: red;">Docente Editado</h3>
	<?php endif ?>
	<?php if (isset($_GET['eliminado'])): ?>
		<h3 style="margin-bottom: 50px; color: red;">Docente Eliminado</h3>
	<?php endif ?>
	<form action="FichaDocente" method="POST">
		<div class="titulo_busqueda">
			<label for="">
				Buscar Docente
			</label>
			
		</div>
		
		<div class="boton_busqueda">
			<input type="text" name="cedula">
			<button type="submit"><i class="fas fa-search"></i></button>
		</div>
	</form>
</div>