const botones = document.querySelectorAll('.botonTabla');

let arra = {
  "1": ["Planifica tu semana", "img/tabla-dinamica-01.jpg","En esta tabla el usuario podra planificar sus activiadades de la semana y crear su propio calendario de tareas semanales.","descargar.php?archivo=pagina1","tabla1.html"],
  "2": ["Calculo de Bebida", "img/tabla-dinamica-02.jpg","Bebidas","descargar.php?archivo=pagina2","tabla2.html"],
  "3": ["Insertar Registro", "img/tabla-dinamica-03.jpg","Registro","descargar.php?archivo=pagina3","tabla3/tabla3.html"]
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
    demoModal:"href"
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