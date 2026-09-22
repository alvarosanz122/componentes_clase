function calcular(){
let nombreBebida = '';
let cantidad = 0;
const tragos_botellas = 16;
let tragos_existente = 0;
let ventas = 0;
let tragos_actual = 0;
const stock = 8;

nombreBebida = prompt("Introduce nombre de la bebida");
cantidad = prompt("Cantidad de botellas");
ventas = prompt("Cuantos tragos se vendio");


tragos_existente = cantidad * tragos_botellas;
tragos_actual = tragos_existente - ventas;

prevision = tragos_actual - stock;

if(tragos_actual > stock){
 alert("Su stock esta adecuado");

}else{
    alert("Reponer Stock");
}

document.getElementById("nombreBebida").innerHTML = nombreBebida;
document.getElementById("cantidad").innerHTML = cantidad;
document.getElementById("ventas").innerHTML = ventas;
document.getElementById("tragosExistente").innerHTML = tragos_existente;
document.getElementById("tragosActual").innerHTML = tragos_actual;
document.getElementById("prevision").innerHTML = prevision;

}




