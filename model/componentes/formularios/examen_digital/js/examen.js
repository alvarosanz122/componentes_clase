function mensaje() {
    if (confirm("Esta seguro que quiere continuar")) {
     var nombreEstudiante = document.registroEstudiante.nombreEstudiante.value;
     var identificacionEstudiante = document.registroEstudiante.identificacionEstudiante.value;
     var respuesta1 = document.registroEstudiante.respuesta1.value;
     var respuesta2 = document.registroEstudiante.respuesta2.value;
     var respuesta3 = document.registroEstudiante.respuesta3.value;
     var respuesta4 = document.registroEstudiante.respuesta4.value;
     var respuesta5 = document.registroEstudiante.respuesta5.value;
     var idOculto = document.registroEstudiante.idOculto.value;
     const datos = {nombreEstudiante: nombreEstudiante,identificacionEstudiante: identificacionEstudiante,respuesta1: respuesta1,respuesta2: respuesta2,respuesta3: respuesta3,respuesta4: respuesta4,respuesta5: respuesta5,idOculto:idOculto};
     
     const text = JSON.stringify(datos);
        console.log(text);
        fetch("correcion.php", {
             method: "POST",
             headers: {"Content-Type": "application/json"},
             body: text
        })
            .then(response => response.text())
            .then(respuesta => {
                var res = JSON.parse(respuesta);

                if(res['res'] === 'ok') {
                    alert(res['message']);
                    location.reload();
                }else{
                  alert(res['message']);   
                }
            })
            .catch(error => {
              alert("Error AJAX:", error);
             });
            
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

const botones = document.querySelectorAll('.botonFormulario');

const miModal = document.getElementById('modalId');
 
botones.forEach(boton => {
  boton.addEventListener('click', () => {

    const id = boton.dataset.id;
    const name = boton.dataset.name;
    const idRespuesta = boton.dataset.respuesta;

    const modal = new bootstrap.Modal(
      document.querySelector('#modalId')
    );

    modal.show();
    document.getElementById("nombreAlum").innerHTML = name;
    document.getElementById("idOculto").value = id;
    document.getElementById("idRespuesta").value = idRespuesta;
  });
}); 



function validar(){

    var idOculto = document.examen.idOculto.value;
    var notaExamen = document.examen.nota1.value;
    var idRespuesta = document.examen.idRespuesta.value;

    const datos = {idOculto:idOculto,notaExamen:notaExamen,idRespuesta:idRespuesta};
     
     const text = JSON.stringify(datos);

     fetch("notas.php", {
             method: "POST",
             headers: {"Content-Type": "application/json"},
             body: text
        })
            .then(response => response.text())
            .then(respuesta => {
                var res = JSON.parse(respuesta);

                if(res['res'] === 'ok') {
                    alert(res['message']);
                    const modal = bootstrap.Modal.getInstance(document.getElementById('modalId'));
                    modal.hide();
                    location.reload();
                }else{
                  alert(res['message']);   
                }
            })
            .catch(error => {
              alert("Error AJAX:", error);
             });
}


function crearExamen(){

    var respuesta1 = document.examenClase.pregunta1.value;
    var respuesta2 = document.examenClase.pregunta2.value;
    var respuesta3 = document.examenClase.pregunta3.value;
    var respuesta4 = document.examenClase.pregunta4.value;
    var respuesta5 = document.examenClase.pregunta5.value;

const datos = {respuesta1:respuesta1,respuesta2:respuesta2,respuesta3:respuesta3,respuesta4:respuesta4,respuesta5:respuesta5};
const text = JSON.stringify(datos);

     fetch("preguntas.php", {
             method: "POST",
             headers: {"Content-Type": "application/json"},
             body: text
        })
            .then(response => response.text())
            .then(respuesta => {
                var res = JSON.parse(respuesta);

                if(res['res'] === 'ok') {
                    alert(res['message']);
                    location.reload();
                }else{
                  alert(res['message']);   
                }
            })
            .catch(error => {
              alert("Error AJAX:", error);
             });

}