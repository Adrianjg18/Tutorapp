const nombre = "Richard";
const nombre2 = "Stallman";
const nombreApellido = "Richard Stallman";

document.write(nombre);
document.writeln(" ");
document.write(nombre2);
console.log(nombreApellido);

document.write("<br>");

document.write("<br> <B>Alguna vez cito: </B>");


const cita = "Compartir el conomicimiento es el acto mas fundamental de la amistad. Porque es una forma de dar algo sin perder nada.";
document.write("<br>");
document.write(cita);
console.log(cita);

// Concadenar con la funcion "contact"
const lugar = "Notre-Dame tine una altuta de "
const altura = 128;
const medida = ' metros';
const textoCompuesto = '' . concat(lugar, altura, medida);

document.write("<br>");

const cadenaNormal = 'Compartir el conomicimiento es el acto mas fundamental de la amistad. Porque es una forma de dar algo sin perder nada.';

// Convierte en mayusculas
const cadenaMayusculas = cadenaNormal.toUpperCase();
document.write("<br>"+cadenaMayusculas);
console.log("<br>"+cadenaMayusculas);
document.write("<br>");

// Cuantos caracteres tiene? Y sin espacios?
document.write("<br>");
document.write("¿Cuantos caracteres tiene?  ¿Y sin espacios?");

document.write("<br>");

document.write("<br> <B>¿Cuantos anos tiene Madonna?</B>");
document.write("<br>Madonna nacio en 1958 y tiene la edad de")

const materials = [
    'Hydrogen',
    'Helium',
    'Lithium',
    'Beryllium'
  ];
  document.write("<br>")
  document.write(materials.map(material => material.length));
  console.log(materials.map(material => material.length));
  // expected output: Array [5, 6, 7, 9]
  
  var saludo = function () {
    return 'Hola a todos';
  };
  console.log(saludo());






