/*
    Eventos
    click -> botones
    submit -> form
    change -> etiquetas que guarden textos o inputs
    input -> input
    mouseover -> cualquier elemento
*/

/*
    Selectores de js
    getElementById
    querySelector -> retorna un elemento
    querySelectorAll -> retorna una lista de elementos
        (Simples -> etiqueta,clases,id)
        (Combinados -> etiqueta etiqueta, clase con clase, etc)
    Propiedades
    innerHtml
    innerText
    value
*/

/*
    WebComponents
    -Se basan en tres herramientas
    1-Custom Elements -> permite crear etiquetas personalizadas
    2-Shadow DOM -> permite crear entornos encapsulados
    3-Templates -> que me permite reutilizar contenido


    Metodos de ciclo de vida

    *constructor() -> como se inicializa el webcomponent
    *connectedCallback() -> como se muestra cuando el componente
    entra al DOM
    *disconnectedCallback()-> como reacciona el elemento cuando
    se elimina del DOM
    *attributeChangedCallback() -> como reacciona el elemento cuando
    se cambia un atirbuto
    *adoptedCallback() -> como reacciona cuando el elemento se mueve de
    lugar (de un html a otro)


*/

class FormEjemplo extends HTMLElement{
    constructor(){
        super()
    }

    connectedCallback(){
        this.innerHTML=`
        <form>
            <label type="text">Nombre</label>
            <input placeholder="Escribe aqui tu nombre">
            <label type="text">Nombre</label>
            <input placeholder="Escribe aqui tu nombre">
            <button type="button">Haz click aqui!</button>
        </form>
        `
    }
    
}
customElements.define("form-ejemplo",FormEjemplo)


class EjemploAtributo extends HTMLElement{
    static get observedAttributes(){
        return ["nombre"]
    }

    attributeChangedCallback(atributo,oldvalue,newvalue){
        if(atributo === "nombre" &&  oldvalue !== newvalue)
            this.actualizar()
    }

    actualizar(){
        let nombre = this.getAttribute("nombre")
        this.innerHTML = `<h2>Hola ${nombre}</h2>`
    }

}

customElements.define("saludo-ejemplo",EjemploAtributo)

class ProductoShadow extends HTMLElement{
    constructor(){
        super()
        this.attachShadow({mode:"open"})
    }

    connectedCallback(){
        this.shadowRoot.innerHTML=
            `
            <style>
                input{
                margin-top 10px;
                padding: 5px;
            }

            #precio {
                color: green;
                font-sixe: 18px;
            }


            </style>
            
             <h3>Producto</h3>
             <input type="number" placeholder="Ingrese el precio">
             <p id="precio">$ 0.00</p>
            `;

        let input = this.shadowRoot.querySelector("input")
        let precio = this.shadowRoot.querySelector("#precio")
        
        input.addEventListener("input",()=>{
            let valor = input.value
            precio.textContent = `$ ${parseFloat(valor).toFixed(2)}`
        })
        }
}
customElements.define("producto-shadow",ProductoShadow)



class FormularioIngreso extends HTMLElement{
    connectedCallback(){
        const contenedor = document.createElement("div")
        contenedor.className = "contenedor-ingreso"
        const form = document.createElement("form")
        const titulo = document.createElement("h2")
        titulo.textContent = "Formulario de Ejemplo"
        const inputNombre = document.createElement("input")
        inputNombre.type = "text"
        inputNombre.placeholder = "Escribe aqui tu nombre"
        const inputApellido = document.createElement("input")
        inputApellido.type = "text"
        inputApellido.placeholder = "Escribe aqui tu apellido"
        const inputEdad = document.createElement("input")
        inputEdad.type = "number"
        inputEdad.placeholder = "Escribe aqui tu edad"
        const botonGuardar = document.createElement("button")
        botonGuardar.innerText = "Haz click aqui!"
        form.append(
            inputNombre,
            inputApellido,
            inputEdad,
            botonGuardar
        )
        contenedor.append(titulo,form)
        this.appendChild(contenedor)

        botonGuardar.addEventListener("click",function(){
            alert(`Hola ${inputNombre.value} ${inputApellido.value}`)

            if(inputEdad.value>=18){
                alert("Eres mayor de edad")
            }
            else{
                alert("Eres menor de edad")
            }

        })

    }
}

customElements.define("formulario-ingreso",FormularioIngreso)






