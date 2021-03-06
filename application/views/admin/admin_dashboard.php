<div class="cuerpo_dashboard">
	<div id="titulo_dashboard">
		<h2>Estadisticas</h2>
	</div>
	<div class="ss">
		<div class="estadisticas_t">
			<div>
				<h4>Total Alumnos:</h4>
				<p><?=$alumnos?></p>
			</div>
			<div>
				<h4>Total Docentes:</h4>
				<p><?=$docentes?></p>
			</div>
		</div>
		<div class="estadisticas_s">
			<div>
				<h4>Alumnos Masculinos:</h4>
				<p><?=$masculino?></p>
			</div>
			<div>
				<h4>Alumnos Femeninos:</h4>
				<p><?=$femenino?></p>
			</div>
		</div>
	</div>
	<div class="s">
		<table cellspacing="25" align="center">
			<caption><strong style="border-bottom: 1px solid #C624C0;">Estadisticas Año-Mencion</strong></caption>
			<tr>
				<th>Año</th>
				<th>Electricidad</th>
				<th>Mecanica</th>
				<th>Petroquimica</th>
			</tr>
			<tr>
				<td>1er</td>
				<td><?=$p_electricidad?></td>
				<td><?=$p_mecanica?></td>
				<td><?=$p_petro?></td>
			</tr>
			<tr>
				<td>2do</td>
				<td><?=$sg_electricidad?></td>
				<td><?=$sg_mecanica?></td>
				<td><?=$sg_petro?></td>
			</tr>
			<tr>
				<td>3ero</td>
				<td><?=$t_electricidad?></td>
				<td><?=$t_mecanica?></td>
				<td><?=$t_petro?></td>
			</tr>
			<tr>
				<td>4to</td>
				<td><?=$c_electricidad?></td>
				<td><?=$c_mecanica?></td>
				<td><?=$c_petro?></td>
			</tr>
			<tr>
				<td>5to</td>
				<td><?=$q_electricidad?></td>
				<td><?=$q_mecanica?></td>
				<td><?=$q_petro?></td>
			</tr>
			<tr>
				<td>6to</td>
				<td><?=$se_electricidad?></td>
				<td><?=$se_mecanica?></td>
				<td><?=$se_petro?></td>
			</tr>
		</table>
	</div>
</div>