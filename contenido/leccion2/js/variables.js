const nombre = "John";
const nombre2 = "Smith";
const nombreApellido = "John Smith";

document.write(nombre);
console.log(nombreApellido);

// Concadenar
const nombre3 = "Atila";
const apellido3 = "el humo";
const variable3 = nombre3 + apellido3;
document.writeln("<br>");
document.write(variable3);

// Con plantillas etiquetadas
const zona1 = "Mancha";
const libro = `En un lugar en la ${zona1} cuyo nombre no quiero acordar..`;
document.write("<br>Con plantillas etiquetadas");
document.write(libro);

// Concadenar con la funcion "contact"
const lugar = "Notre-Dame tine una altuta de "
const altura = 128;
const medida = ' metros';
const textoCompuesto = '' . concat(lugar, altura, medida);

document.write("<br>"+ textoCompuesto);
// Ntro-Dame tinee una altura de 128 metros

// Funciones para convertir en mayuscula, minuscula y la longitud de la cadena
document.write("<br> <B>Funciones toUpperCase toLowerCase</B>");
const cadenaNormal = 'El 90% de nuestras decisiones las toma nuestro subconsciente';

// Convierte en mayusculas
const cadenaMayusculas = cadenaNormal.toUpperCase();
document.write("<br>"+cadenaMayusculas);

// Convierte en minúsculas
const cadenaMinusculas = cadenaNormal.toLowerCase();
document.write("<br>" + cadenaMinusculas);

// Número de carácteres
const longitud = cadenaNormal.length;
document.write("<br> Longitud "+longitud);

document.write("<h3>Creando nuestras variables con eval</h3>");
    
let valor1 = "Uno";
let valor2 = "Dos";
let valor3 = "Tres";
let valor4 = "Cuatro";
let valor5 = "Cinco";
let valor6 = "Seis";
 
for (let i = 1; i < 7 ; i++) {
    document.write(eval("valor" + i) + "<br>");    
}

