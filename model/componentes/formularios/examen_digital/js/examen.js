function mensaje() {
    if (confirm("Esta seguro que quiere continuar")) {
     var nombreEstudiante = document.registroEstudiante.nombreEstudiante.value;
     var identificacionEstudiante = document.registroEstudiante.identificacionEstudiante.value;
     var respuesta1 = document.registroEstudiante.respuesta1.value;
     var respuesta2 = document.registroEstudiante.respuesta2.value;
     var respuesta3 = document.registroEstudiante.respuesta3.value;
     var respuesta4 = document.registroEstudiante.respuesta4.value;
     var respuesta5 = document.registroEstudiante.respuesta5.value;
     
     const datos = {nombreEstudiante: nombreEstudiante,identificacionEstudiante: identificacionEstudiante,respuesta1: respuesta1,respuesta2: respuesta2,respuesta3: respuesta3,respuesta4: respuesta4,respuesta5: respuesta5};
     
     const text = JSON.stringify(datos);

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

    const modal = new bootstrap.Modal(
      document.querySelector('#modalId')
    );

    modal.show();
    document.getElementById("nombreAlum").innerHTML = name;
    document.getElementById("idOculto").value = id;

  });
}); 



function validar(){

    var idOculto = document.examen.idOculto.value;
    var notaExamen = document.examen.nota1.value;

    const datos = {idOculto:idOculto,notaExamen:notaExamen};
     
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

miModal.addEventListener('close', () => {
    console.log('El modal acaba de cerrarse');
});
 