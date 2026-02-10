let boton2 = document.getElementById("boton2")
let input1 = document.getElementById("input1")
let input2 = document.getElementById("input2")
let texto1 = document.getElementById("texto1")
let parrafos = document.querySelectorAll("p")
let inputc = document.querySelector(".contra")
let boton3 = document.querySelector("#boton3")
let boton4 = document.querySelector("#ejemplo")
let btncrear = document.querySelector("#btncrear") 
let btncambio = document.querySelector("#cambio")
let btncambiame = document.querySelector("#cambiame")
let btnremover = document.querySelector("#remover")
let creacion = document.querySelector("#creacion")

let inputc1 = document.createElement("input")
let inputc2 = document.createElement("input")
let btnc = document.createElement("button")


creacion.addEventListener("click",function(){
    btnc.textContent = "Fui creado con js"
    document.body.append(inputc1,inputc2,btnc)
})


btncambio.addEventListener("click",function(){
    btncambiame.setAttribute("class","btnaceptar")
})

btncrear.addEventListener("click",function(){
    let etiqueta = document.createElement("p")
    etiqueta.innerText = "Soy creado con js"
    etiqueta.style.color = "blue"
    document.body.appendChild(etiqueta)
})

let formejemplo = document.querySelector("#formejemplo");
console.log(formejemplo.childNodes)
let contendor = boton4.parentNode;
console.log(contendor)

btnremover.addEventListener("click",function(){
    let quitar = document.querySelector("#inputform")
    quitar.remove()
})



parrafos.forEach(elemento =>{
    elemento.style.color = "red";
})



inputc.addEventListener("focus",function(){
    inputc.style.outline= "3px solid red";
})

boton2.addEventListener("click",function(){
    alert("Esto es por un listener")
})

boton3.addEventListener("click",function(){
    alert("Otra alerta!");
})


input2.addEventListener("focus",function(){
    input2.style.outline= "3px solid blue";
    input2.style.backgroundColor = "green";
})

input2.addEventListener("blur",function(){
    input2.style.outline= "none";
    input2.style.backgroundColor = "white";

})

function alerta(){
    alert("Haz hecho click!")
}

function texto(){
    texto1.textContent = input1.value
}