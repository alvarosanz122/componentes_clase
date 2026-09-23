function mensaje() {
    if (confirm("Esta seguro que quiere continuar")) {
        const formulario = document.getElementById('miFormulario');
        formulario.submit();
    } else {
        alert("Envio del examen cancelado");
    }
    
}


function clave() {
    var usuario = document.login.usuario.value;
    var clave = document.login.clave.value;

    if (usuario === "profe" && clave === "123") {
        window.location.href = "panel.html";
    } else {
        alert("😅 Clave incorrecta o usuario incorrecto \n Intentelo de nuevo");
    }
}


function cambioPlan() {
    alert("entra");
}