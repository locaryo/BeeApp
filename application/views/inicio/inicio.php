<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>BeeApp</title>
		<link rel="stylesheet" href="<?= base_url('assets/css/inicio.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">
	</head>
	<body>
		<!-- cabecera -->
		<header id="header" class="header">
			<div class='logo'>
				<h1>BeeApp</h1>
			</div>
			<div class='boton-inicio'>
				<a href="<?=base_url('index.php/Welcome/vistaIngresar')?>"><i class="fas fa-door-open"></i></a>
			</div>
		</header>

		<!-- Modal -->

			<!-- <div class="modal" id="modal">
				<div class="contenido-modal">
					<div class="header-modal">
						<h3>INGRESAR</h3>
					</div>
					<div >
						<?php if (isset($_GET['verifiquepass'])): ?>
						<p style="color: red; text-align: center;">Contraseña Incorrecta</p>
						<?php endif ?>

						<?php if (isset($_GET['verifiqueuser'])): ?>
						<p style="color: red; text-align: center;">Usuario Incorrecto</p>
						<?php endif ?>

						<?php if (isset($_GET['noautorizado'])): ?>
						<p style="color: red; text-align: center;">Inicie Sesion para acceder al Dashboard</p>
						<?php endif ?>

						<?php if (isset($_GET['tiempovencido'])): ?>
						<p style="color: red; text-align: center;">Aplicacion Bloqueada: Comunicarse a Servicio Tecnico</p>
						<?php endif ?>
					</div>
					<div class="cuerpo-modal">
						<div class="form-modal">
							<form class="" action="<?php echo base_url('index.php/Admin/Ingresar') ?>" method="post">
								<label for="">Usuario</label>
								<input type="text" name="usuario">
								<label for="">Contraseña</label>
								<input type="password" name="contrasena">
								<button type="submit">INGRESAR</button>
								</label>
							</form>
						</div>
						<div class="btn-modal-close">
							<a href="#">Cerrar</a>
						</div>
					</div>
				</div>
			</div> -->

		<div class="cuerpo_inicio">
				<!-- primera seccion -->
		<section class="presentacion">
			<div class='presentacion-logo'>
				<h1>BeeApp</h1>
			</div>
			<div class='presentacion-parrafo'>
				<p>BeeApp es una aplicación web dedicada a institutos educativos con la tarea de ayudar a administrar y gestionar datos de Estudiantes, Docentes, entre otros.<br>
				Esta aplicación ademas de administrar y gestionar datos, cuenta con una una funcion predeterminada que genera constancias en formato PDF.</p>
			</div>
		</section>

		<!-- segunda seccion -->
		<section class="caracteristicas">
			<div>
				<h3>INTUITIVA</h3>
				<p>Para usar BeeApp no nesecitas seguir rigurosos pasos ni tomar un curso de adiestramiento sobre el uso de esta app, solo con visualizar una vez la aplicacion puedes deducir como usarla...
				</p>
			</div>
			<div>
				<h3>FLUIDEZ</h3>
				<p>Se mueve con una rapidez al momento de hacer transiciones por la app, en la carga, edicion y eliminacion de datos.  </p>
			</div>
			<div>
				<h3>ADAPTABLE</h3>
				<p>BeeApp cuenta con una version predeterminada, pero eso no representa problema, ya que puede evolucionar y adaptarse a los diferentes requerimientos que presente la institucion.</p>
			</div>
		</section>
		</div>

		<!-- pie de pagina -->
		<footer class="pie-inicio">
			<div class="autores">
				<p>Andry Bracho | Luis Melendez</p>
				<p>BeeApp 2021-2022 &copy;</p>
			</div>
			<div class="redes">
				<p><i class="fab fa-whatsapp"></i> +58 123-45-45</p>
				<p><i class="fab fa-telegram-plane"></i> +58 123-45-45</p>
				<p><i class="fas fa-mobile-alt"></i> +58 123-45-45</p>
			</div>
		</footer>

		</body>
		<script type="text/javascript" src="<?= base_url('assets/js/all.min.js'); ?>"></script>
	</html>
