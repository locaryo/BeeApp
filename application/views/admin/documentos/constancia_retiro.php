<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Constancia</title>
	</head>
	<style type="text/css">
		img{
			width: 100px;
			height: 100px;
		}
		.nombre{
			text-transform: uppercase;
		}
	</style>
	<body style="font-family: sans-serif; box-sizing: border-box;">
		<?php setlocale(LC_TIME,"es_ES"); ?>
		<?php $año = date('Y'); ?>
		<div class="encabezado">
			<div style="position: absolute;">
				<img src="<?=base_url('assets/img/a.png')?>">
				<img src="<?=base_url('assets/img/b.png')?>" style="margin-left: 500px;">
			</div>
			<div style="margin-bottom: 70px; text-align: center; margin-top: 30px;">
				<p style="margin: 0px 0px;">REPUBLICA BOLIVARIAN DE VENEZUELA</p>
				<p style="margin: 0px 0px;">MINISTERIO DEL PODER POPULAR PARA LA EDUCACION</p>
				<p style="margin: 0px 0px;">E.T.R.P.A "Alí Primera"</p>
				<p style="margin: 0px 0px;">MORON - CARABOBO</p>
			</div>
		</div>
		<h1 style="text-align: center;">CONSTANCIA DE RETIRO</h1>
		<?php foreach ($datos_e as $key): ?>
			
		<div style="text-align: justify; margin-top: 50px;">
			<p style="line-height: 30px; text-indent: 3em; text-align: left;">Quien suscribe Prof. Julio Medina, Director(a) de la Escuela Tecnica Robinsoniana Petroquimica y Agropecuaria "Alí Primera", ubicada en la parroquia Morón, Municipio Juan José Mora, Estado Carabobo, Expide la presente Constancia de Retiro al estudiante: <strong class="nombre"><?= $key->p_nombre_e?> <?= $key->s_nombre_e?> <?= $key->p_apellido_e?> <?= $key->s_apellido_e?></strong>, portador(a) de la C.I <strong><?= $key->ci_e?></strong>, cursante de <strong>"<?= $key->curso?>"</strong> Año, de la Mencion <strong>"<?= $key->mencion?>"</strong> en la Seccion <strong>"<?= $key->seccion?>"</strong>, Por Motivo:_____________________________________</p>
		</div>
		<?php endforeach ?>
		<div style="margin-top: 50px; margin-bottom: 180px;">
			<p style="text-indent: 3em; text-align: left;">La siguiente constancia se expide a peticion de la parte interesada en, Morón Municipio Juan José Mora, a los <?= date('d')?> dias del mes de <?= strftime('%B')?> del año <?= date('Y')?>.</p>
		</div>
		<div style="text-align: center; display: flex; justify-content: center; align-items: center;">
			<div style="margin: 0px 300px 0px 0px;">
				<p>_______________________</p>
				<p>Prof. Julio Medina</p>
				<p>V-7.123.456</p>
				<p>Director</p>
			</div>
			<div style="margin: 0px 0px 0px 300px;">
				<p>_______________________</p>
				<p>Firma Representante</p>
			</div>
		</div>
	</body>
</html>