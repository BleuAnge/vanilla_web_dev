const template = document.createElement("template")

template.innerHTML = `
    <p> 
        <slot></slot> 
    </p>
`

class Test extends HTMLElement {
    constructor(){
        super()
        const shadow = this.attachShadow({ mode : "open" })
        shadow.append(template.content.cloneNode(true))
    }
}

customElements.define("test-item", Test)