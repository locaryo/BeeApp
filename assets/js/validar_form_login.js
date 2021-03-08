document.addEventListener("DOMContentLoaded", function(event) {
document.getElementById('form_login').addEventListener('submit',
ValidarInputLogin)});

function ValidarInputLogin(a) {
  a.preventDefault();
  var usuario_login = document.getElementById('input-usuario').value;
  var pass_login = document.getElementById('input-pass').value;
  if (usuario_login.length == 0  || usuario_login == null || /^\s+$/.test(usuario_login)) {
    document.getElementById('input-usuario').value = 'Usuario Requerido';
    return 0;
  }
}
