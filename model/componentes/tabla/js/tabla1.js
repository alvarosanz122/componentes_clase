function planificacion(){
let plan,domingo,lunes,martes,miercoles,jueves,viernes,sabado = "";
let cont = 0;
domingo = prompt("Que actividad tienes para hoy domingo");
lunes = prompt("Que actividad tienes para hoy lunes");
martes = prompt("Que actividad tienes para hoy martes");
miercoles = prompt("Que actividad tienes para hoy miercoles");
jueves = prompt("Que actividad tienes para hoy jueves");
viernes = prompt("Que actividad tienes para hoy viernes");
sabado = prompt("Que actividad tienes para hoy sabado");
actividades = [domingo,lunes,martes,miercoles,jueves,viernes,sabado]
dias = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];

while(cont < dias.length){
     document.getElementById('actividad'+dias[cont]).innerHTML = actividades[cont];
    cont++;
}

}

function imprimir(){
    document.getElementById('planificacion').style.display='none';
    document.getElementById('imprimir').style.display='none';
    window.print();
    document.getElementById('planificacion').removeAttribute("style");
    document.getElementById('imprimir').removeAttribute("style");
}