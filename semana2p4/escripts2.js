/*let cuentatotal = 100;
let porcentajepropina = 0.10;

console.log("Su total es de: $"+Number(cuentatotal+(cuentatotal*porcentajepropina)))
*/

let inputotal = document.getElementById("total");
let inputpropina = document.getElementById("propina");
let inputresultado = document.getElementById("resultado");
let btncalculo = document.getElementById("btnCalcular");
let metodo = document.getElementById("metodo");

btncalculo.addEventListener("click",function(){
    let total = Number(inputotal.value);
    let propina = Number(inputpropina.value);
    resultado = (total+(total*propina));
    inputresultado.innerText = resultado+" Metodo de pago: "+metodo.value;
})

