function mostrar() {
    var check_editar = document.getElementById('check-editar');
    var check_eliminar = document.getElementById('check-eliminar');
    if (check_editar.checked == true) {
        document.getElementById('caja-boton-editar').style.display = 'block';
        document.getElementById('caja-boton-eliminar').style.display = 'none';
        document.getElementById('label-eli').style.display = 'none';
        document.getElementById('primer-n').readOnly = false;
        document.getElementById('segundo-n').readOnly = false;
        document.getElementById('primer-a').readOnly = false;
        document.getElementById('segundo-a').readOnly = false;
        document.getElementById('ci-e').readOnly = false;
        document.getElementById('nacimiento-e').readOnly = false;
        document.getElementById('codigo-e').readOnly = false;
        document.getElementById('tel-e').readOnly = false;
        document.getElementById('edad').readOnly = false;
        document.getElementById('select-curso').style.display = 'block';
        document.getElementById('select-seccion').style.display = 'block';
        document.getElementById('select-turno').style.display = 'block';
        document.getElementById('select-codigo').style.display = 'block';
        document.getElementById('select-nacimiento').style.display = 'block';
        document.getElementById('select-foto-e').style.display = 'block';
        document.getElementById('select-foto-r').style.display = 'block';
        document.getElementById('select-c-vacunacion').style.display = 'block';
        document.getElementById('select-certificado').style.display = 'block';
        document.getElementById('select-notas').style.display = 'block';
        document.getElementById('select-mencion').style.display = 'block';
        document.getElementById('mencion').style.display = 'none';
        document.getElementById('curso').style.display = 'none';
        document.getElementById('pn').style.display = 'none';
        document.getElementById('codigo-e').style.display = 'none';
        document.getElementById('foto-e').style.display = 'none';
        document.getElementById('foto-r').style.display = 'none';
        document.getElementById('notas').style.display = 'none';
        document.getElementById('c_vacunacion').style.display = 'none';
        document.getElementById('certificado').style.display = 'none';
        document.getElementById('seccion').style.display = 'none';
        document.getElementById('turno').style.display = 'none';
        document.getElementById('textarea').readOnly = false;
    } else {
        document.getElementById('caja-boton-editar').style.display = 'none';
        document.getElementById('label-eli').style.display = 'block';
        document.getElementById('primer-n').readOnly = true;
        document.getElementById('segundo-n').readOnly = true;
        document.getElementById('primer-a').readOnly = true;
        document.getElementById('segundo-a').readOnly = true;
        document.getElementById('ci-e').readOnly = true;
        document.getElementById('nacimiento-e').readOnly = true;
        document.getElementById('codigo-e').readOnly = true;
        document.getElementById('tel-e').readOnly = true;
        document.getElementById('edad').readOnly = true;
        document.getElementById('select-curso').style.display = 'none';
        document.getElementById('select-seccion').style.display = 'none';
        document.getElementById('select-turno').style.display = 'none';
        document.getElementById('select-codigo').style.display = 'none';
        document.getElementById('select-nacimiento').style.display = 'none';
        document.getElementById('select-foto-e').style.display = 'none';
        document.getElementById('select-foto-r').style.display = 'none';
        document.getElementById('select-c-vacunacion').style.display = 'none';
        document.getElementById('select-certificado').style.display = 'none';
        document.getElementById('select-notas').style.display = 'none';
        document.getElementById('select-mencion').style.display = 'none';
        document.getElementById('mencion').style.display = 'block';
        document.getElementById('foto-e').style.display = 'block';
        document.getElementById('foto-r').style.display = 'block';
        document.getElementById('curso').style.display = 'block';
        document.getElementById('seccion').style.display = 'block';
        document.getElementById('turno').style.display = 'block';
        document.getElementById('codigo-e').style.display = 'block';
        document.getElementById('c_vacunacion').style.display = 'block';
        document.getElementById('certificado').style.display = 'block';
        document.getElementById('notas').style.display = 'block';
        document.getElementById('textarea').readOnly = true;
        document.getElementById('pn').style.display = 'block';
    }

    if (check_eliminar.checked == true) {
        document.getElementById('caja-boton-eliminar').style.display = 'block';
        document.getElementById('label-edi').style.display = 'none';
    } else {
        document.getElementById('caja-boton-eliminar').style.display = 'none';
        document.getElementById('label-edi').style.display = 'block';
    }

}

function limpiar(input) {
    	// body...
        var check_editar = document.getElementById('check-editar');

    	if (check_editar.checked != false) {
    		input.value = '';
    	}
}

function limpiardocente(e) {
    if(document.getElementById('check-editar-docente').checked != false) {
            e.value = '';
    }
}

function llenar(input) {
    var check_editar = document.getElementById('check-editar');
    if (check_editar.checked != false && input.value == '') {
        input.value = input.defaultValue;
    }
}

function llenardocente(ev) {
    if (document.getElementById('check-editar-docente').checked != false && ev.value == '') {
        ev.value = ev.defaultValue;
    }
}

function docentemostrar() {
    if (document.getElementById('check-editar-docente').checked == true) {
        document.getElementById('caja-boton-editar-docente').style.display = 'block';
        document.getElementById('label-eli').style.display = 'none';
        document.getElementById('p_nombre_d').readOnly = false;
        document.getElementById('s_nombre_d').readOnly = false;
        document.getElementById('p_apellido_d').readOnly = false;
        document.getElementById('s_apellido_d').readOnly = false;
        document.getElementById('cedula_d').readOnly = false;
        document.getElementById('nacimiento_d').readOnly = false;
        document.getElementById('tel_d').readOnly = false;
        document.getElementById('dir').readOnly = false;
        document.getElementById('select_codigo_d').style.display = 'block';
        document.getElementById('codigo_d').style.display = 'none';
        //document.getElementById('').readOnly = ;
        //document.getElementById('').readOnly = ;
        //document.getElementById('').readOnly = ; 
    }else{
        document.getElementById('caja-boton-editar-docente').style.display = 'none';
        document.getElementById('label-eli').style.display = 'block';
        document.getElementById('p_nombre_d').readOnly = true;
        document.getElementById('s_nombre_d').readOnly = true;
        document.getElementById('p_apellido_d').readOnly = true;
        document.getElementById('s_apellido_d').readOnly = true;
        document.getElementById('cedula_d').readOnly = true;
        document.getElementById('nacimiento_d').readOnly = true;
        document.getElementById('tel_d').readOnly = true;
        document.getElementById('dir').readOnly = true;
        document.getElementById('select_codigo_d').style.display = 'none';
        document.getElementById('codigo_d').style.display = 'block';
    }

    if (document.getElementById('check-eliminar-docente').checked == true) {
        document.getElementById('caja-boton-eliminar-docente').style.display = 'block';
        document.getElementById('label-edi').style.display = 'none';
    }else{
        document.getElementById('caja-boton-eliminar-docente').style.display = 'none';
        document.getElementById('label-edi').style.display = 'block';
    }
}