<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>BeeApp | Ingresar</title>
		<link rel="stylesheet" href="<?= base_url('assets/css/ingresar.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
	</head>
	<body>
		<header class="header">
			<div class="boton-atras">
				<a href="<?= base_url() ?>"><i class="fas fa-arrow-circle-left"></i></a>
			</div>
			<div class="logo">
				<h1>BeeApp</h1>
			</div>
		</header>
		
		<div class="cuerpo-form">
			<div >
				<?php if (isset($_GET['noautorizado'])): ?>
				<p style="color: red; text-align: center;">Inicie Sesion para acceder al Dashboard</p>
				<?php endif ?>

				<?php if (isset($_GET['tiempovencido'])): ?>
				<p style="color: red; text-align: center;">Aplicacion Bloqueada: Comunicarse a Servicio Tecnico</p>
				<?php endif ?>
			</div>
			<form action="<?php echo base_url('index.php/Admin/Ingresar') ?>" method="POST">
				<label for="">Usuario</label>
				<input type="text" name="usuario">
				<label for="">Contraseña</label>
				<input type="password" name="contrasena">
				<button type="submit">INGRESAR</button>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="<?= base_url('assets/js/all.min.js') ?>"></script>
</html>