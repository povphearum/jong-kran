
const addIngre = document.querySelector('.addIngre')

const addStep = document.querySelector('.addStep')

const addNote = document.querySelector('.addNote')


document.querySelector('.btnIngre').onclick = () =>{
    const input = document.createElement('input')
    input.type = 'text'
    input.className = 'form-control'
    input.placeholder = 'e.g ...'

    addIngre.appendChild(input)
}

document.querySelector('.btnStep').onclick = () =>{
    const input = document.createElement('input')
    input.type = 'text'
    input.className = 'form-control'
    input.placeholder = 'e.g ...'

    addStep.appendChild(input)
}
var n = 0

document.querySelector('.btnNote').onclick = () =>{
    if(n ==0){
        const div = document.createElement('div')
        const div1 = document.createElement('div')
        div.className = 'col-12'
        div1.className = 'col-3 p-3'
        const btnremove = document.createElement('button')
        btnremove.type = 'button'
        btnremove.className = 'removeNote btn btn-danger mt-30'
        btnremove.innerHTML = '- Remove Note'
        const textarea = document.createElement('textarea')

        textarea.className = 'form-control'
        textarea.cols = 30
        textarea.rows = 10
        textarea.placeholder = 'Add Note'
        btnremove.addEventListener('click',()=>{
            addNote.removeChild(div)
            addNote.removeChild(div1)
            n = 0
        })
        div1.appendChild(btnremove)
        div.appendChild(textarea)

        addNote.appendChild(div)
        addNote.appendChild(div1)
        n = 1
    }
    
    
    
      
}



