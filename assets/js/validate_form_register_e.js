document.addEventListener("DOMContentLoaded", function(event) {
document.getElementById('form_e').addEventListener('submit', 
ValidacionFormE)});

function ValidacionFormE(e) {
	e.preventDefault();
	var p_nombre_e = document.getElementById('p_nombre_e').value;
	var s_nombre_e = document.getElementById('s_nombre_e').value;
	var p_apellido_e = document.getElementById('p_apellido_e').value;
	var s_apellido_e = document.getElementById('s_apellido_e').value;
	var ci_d = document.getElementById('ci_d').value;
	var ci_e = document.getElementById('ci_e').value;
	var dir_e = document.getElementById('dir_e').value;
	var tel_e = document.getElementById('tel_e').value;
	if (p_nombre_e.length == ''  || p_nombre_e == null || /^\s+$/.test(p_nombre_e)) {
		document.getElementById('p_nombre_e').value = 'Requerido';
		document.getElementById('p_nombre_e').style.color = 'red';
		return 0;
	}else if(s_nombre_e.length == '' || s_nombre_e == null || /^\s+$/.test(s_nombre_e)){
		document.getElementById('s_nombre_e').value = 'Requerido';
		document.getElementById('s_nombre_e').style.color = 'red';
		return 0;
	}else if(p_apellido_e.length == '' || p_apellido_e == null || /^\s+$/.test(p_apellido_e)){
		document.getElementById('p_apellido_e').value = 'Requerido';
		document.getElementById('p_apellido_e').style.color = 'red';
	}else if(s_apellido_e.length == '' || s_apellido_e == null || /^\s+$/.test(s_apellido_e)){
		document.getElementById('s_apellido_e').value = 'Requerido';
		document.getElementById('s_apellido_e').style.color = 'red';
	}else if(ci_e.length == '' || ci_e == null || isNaN(ci_e)){
		document.getElementById('ci_e').value = 'Requerido solo numeros';
		document.getElementById('ci_e').style.color = 'red';
	}else if(ci_d.length == '' || ci_d == null || isNaN(ci_d)){
		document.getElementById('ci_d').value = 'Requerido solo numeros';
		document.getElementById('ci_d').style.color = 'red';
	}else if(dir_e.length == '' || dir_e == null || /^\s+$/.test(dir_e)){
		document.getElementById('dir_e').value = 'Requerido';
		document.getElementById('dir_e').style.color = 'red';
	}else if(tel_e.length == '' || tel_e == null || /^\d{9}$/.test(tel_e)){
		document.getElementById('tel_e').value = 'Requerido solo numeros';
		document.getElementById('tel_e').style.color = 'red';
	}
	else{
		document.getElementById('form_e').submit();
	}
}

document.addEventListener("DOMContentLoaded", function(e) {
document.getElementById('form_d').addEventListener('submit', 
ValidacionFormD)});

function ValidacionFormD(f) {
	f.preventDefault();
	var p_nombre_d = document.getElementById('p_nombre_d').value;
	var s_nombre_d = document.getElementById('s_nombre_d').value;
	var p_apellido_d = document.getElementById('p_apellido_d').value;
	var s_apellido_d = document.getElementById('s_apellido_d').value;
	var ci_do = document.getElementById('ci_do').value;
	var dir_d = document.getElementById('dir_d').value;
	var tel_d = document.getElementById('tel_d').value;
	if (p_nombre_d.length == ''  || p_nombre_d == null || /^\s+$/.test(p_nombre_d)) {
		document.getElementById('p_nombre_d').value = 'Requerido';
		document.getElementById('p_nombre_d').style.color = 'red';
		return 0;
	}else if(s_nombre_d.length == '' || s_nombre_d == null || /^\s+$/.test(s_nombre_d)){
		document.getElementById('s_nombre_d').value = 'Requerido';
		document.getElementById('s_nombre_d').style.color = 'red';
		return 0;
	}else if(p_apellido_d.length == '' || p_apellido_d == null || /^\s+$/.test(p_apellido_d)){
		document.getElementById('p_apellido_d').value = 'Requerido';
		document.getElementById('p_apellido_d').style.color = 'red';
		return 0;

	}else if(s_apellido_d.length == '' || s_apellido_d == null || /^\s+$/.test(s_apellido_d)){
		document.getElementById('s_apellido_d').value = 'Requerido';
		document.getElementById('s_apellido_d').style.color = 'red';
		return 0;

	}else if(ci_do.length == '' || ci_do == null || isNaN(ci_do)){
		document.getElementById('ci_do').value = 'Requerido solo numeros';
		document.getElementById('ci_do').style.color = 'red';
		return 0;

	}else if(dir_d.length == '' || dir_d == null || /^\s+$/.test(dir_d)){
		document.getElementById('dir_d').value = 'Requerido';
		document.getElementById('dir_d').style.color = 'red';
		return 0;

	}else if(tel_d.length == '' || tel_d == null || /^\d{9}$/.test(tel_d)){
		document.getElementById('tel_d').value = 'Requerido solo numeros';
		document.getElementById('tel_d').style.color = 'red';
		return 0;

	}
	else{
		document.getElementById('form_d').submit();
	}
}

function LimpiarForm(i) {
	if (i.value == 'Requerido' || i.value == 'Requerido solo numeros') {
		i.value = '';
		i.style.color = '#000';
	} else {}
}