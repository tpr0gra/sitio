var nombre = document.getElementById('floatingInput');
var password = document.getElementById('floatingPassword');
var error = document.getElementById('error');
error.style.color = "red";


function enviarFormulario() {
    console.log('Enviando Formulario')

    var mensajesError = [];

    if (nombre.value === null || nombre.value === '') {
        alert("Ingresa tu nombre");
        //mensajesError.push('Ingresa tu nombre ')
    }


    if (password.value === null || password.value === '') {
        //mensajesError.push('Ingresa tu Password')
        alert("Ingresa tu Password");
    }

    if (password.value === "taller" || password.value === 'taller') {
        //mensajesError.push('Usuario Correcto')
        alert("Usuario ingresado Correcto");
        window.location.href = "http://127.0.0.1:5500/index.html";
    } else {
        alert("Usuario Ingresado incorrecto");
    }

    error.innerhtml = mensajesError.join(',')

    return false;
}