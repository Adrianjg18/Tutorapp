// SELECCIONANDO POR SU ID 
//var caja = document.getElementById("micaja");
var caja = document.querySelector("#micaja");
//var caja = document.querySelector("#micaja");

caja.innerHTML = "HOLA, ESTE ES MI NUEVO TEXTO";

// cambiando su aspecto con hojas de estilo
caja.style = "background: blue; width: 400px; height:300px; color:white; border-radius:10px";

var cajaTexto = caja.innerHTML;

var todosLosDivs = document.getElementsByTagName('div');
todosLosDivs[9].style = "background: blue; width: 400px; height:90px; color:white; border-radius:10px";

var todosLosDivs = document.getElementsByTagName('div');
todosLosDivs[10].style = "background: orange; width: 400px; height:90px; color:white; border-radius:10px";

var todosLosDivs = document.getElementsByTagName('div');
todosLosDivs[11].style = "background: orange; width: 400px; height:90px; color:white; border-radius:10px";

console.log(todosLosDivs);

var todoslosnaranjas = document.getElementsByClassName('naranja');
todoslosnaranjas[0].style = "background: orange; width:200px; height:100px; color: black; border-radius:10px";
consolo.log(todoslosnaranjas[0].innerHTML);
// recorriendo todos los objetos seleccionados(los que tienen la clase ´naranja´ )
for (let i = 0; i < todoslosnaranjas.length; i++){

}

