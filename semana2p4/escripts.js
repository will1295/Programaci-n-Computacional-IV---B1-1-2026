//Variables y constantes en js

var variable1;
let variable2;
const constante1 = "Valor constante";

let numero = 20;
let palabra = "Esto es un string";
let opcion = true;

let fecha = new Date();

console.log(fecha.toLocaleDateString('en-En',{
    dateStyle: 'full'
}));

console.log(fecha.getDate())
console.log(fecha.getDay())
console.log(fecha.getFullYear())
console.log(fecha.getHours)
console.log(fecha.getUTCDate())


let parrafo1 = 'Esto es un parrafo de \"ejemplo\"';
let parrafo2 = `Esto \n ira combinado`;

console.log(parrafo1+" "+parrafo2);

console.log(Number("3.14"));
console.log(Number(""));
console.log(Number(" "));
console.log(Number("Juan"));

var x = 20;
console.log(String(x));
console.log(String(123));
console.log(String(100+23));
