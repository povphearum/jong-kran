

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

document.querySelector('.btnNote').onclick = () =>{
    const div = document.createElement('div')
    div.className = 'col-12'
    const textarea = document.createElement('textarea')
    textarea.className = 'form-control'
    textarea.cols = 30
    textarea.rows = 10
    textarea.placeholder = 'Add Note'

    div.appendChild(textarea)

    addNote.appendChild(div)
}