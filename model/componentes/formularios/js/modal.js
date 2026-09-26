const botones = document.querySelectorAll('.botonTabla');

let arra = {
  "1": ["Formulario Médico", "img/plantilla_formulario_hospital.png","Formulario Médico","descargar.php?archivo=pagina1","formulario_medico/index.html","https://github.com/alvarosanz122/formulario_medico"],
  "2": ["Buscador", "img/tabla-dinamica-02.jpg","Buscador","descargar.php?archivo=pagina2","tabla2.html",""],
  "3": ["Examen Digital", "img/plantilla_fomulario_examan_digital.jpg","Examen Digital","descargar.php?archivo=pagina3","examen_digital/index.html",""]
}; 
 
botones.forEach(boton => {
  boton.addEventListener('click', () => {

    const id = boton.dataset.id;

    const modal = new bootstrap.Modal(
      document.querySelector('#modalId')
    );

    modal.show();

   let arra2 = {
    tituloModal: "html",
    imagenModal: "img",
    descripcionModal: "html",
    descargaModal: "href",
    demoModal:"href",
    gitModal:"href"
};
let cont = 0;
Object.entries(arra2).forEach(function([indice, value]) {
    if(value === "img"){
        document.getElementById(indice).src = arra[id][cont];
    }else if(value === "href"){
        document.getElementById(indice).href = arra[id][cont];
    }else{
        document.getElementById(indice).innerHTML=arra[id][cont];

    }
    cont++;
});
    
  });
});