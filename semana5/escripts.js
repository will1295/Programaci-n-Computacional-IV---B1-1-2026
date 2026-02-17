class HolaMundo extends HTMLElement{
    constructor(){
        super();
        this.innerText = "Hola Mundo!"
    }
}
customElements.define("hola-mundo",HolaMundo);

class MiContador extends HTMLElement{
    static get observedAttributes(){
        return ["contador"];
    }

    //El momento en el cual el elemento se carga
    connectedCallback(){
        let inicio = this.getAttribute("contador") ||0;
        this.innerHTML = `<button> Contador: <span id='num'> ${inicio}</span> </button>`;
        this.querySelector("button").onclick=()=>{
            let actual = parseInt(this.getAttribute("contador")||0)
            this.setAttribute("contador",actual+1)
        }
    }

    //Cuando cambia algun atributo
    attributeChangedCallback(name,old,newVal){
        let span = this.querySelector("#num")
        if(span) span.innerText = newVal
    }

}
customElements.define("mi-contador",MiContador);    


class Contador2 extends HTMLElement{
    connectedCallback(){
        this.clicks = this.getAttribute("clicks") || 0
        this.render()
        this.onclick=()=> {
            this.clicks++
            this.render()
        }
    }
    render(){
        this.innerHTML = `<button>Clicks dados: ${this.clicks}</button>`
    }
}

customElements.define('contador-clicks',Contador2)


class BotonShadow extends HTMLElement{
    constructor(){
        super()
        this.attachShadow({mode:'open'})
    }
    connectedCallback(){
        this.shadowRoot.innerHTML=`
        <style>
            button{
                background-color:red;
                color:white;
                padding:10px;
                border-radius:5px;
            }
        </style>
        <button>Soy un shadow button</button>
        `
    }
}
customElements.define("boton-shadow",BotonShadow)


class MiCaja extends HTMLElement{
    constructor(){
        super()
        this.attachShadow({mode:'open'}) 
        let template = document.getElementById("plantilla")
        let contenido = template.content.cloneNode(true)
        this.shadowRoot.appendChild(contenido)
        
    }    
}
customElements.define("mi-caja",MiCaja)