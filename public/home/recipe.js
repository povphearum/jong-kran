
// const addIngre = document.querySelector('.addIngre')

// const addStep = document.querySelector('.addStep')

const addNote = document.querySelector('.addNote')

//
// document.querySelector('.btnIngre').onclick = () =>{
//     const input = document.createElement('input')
//     input.type = 'text'
//     input.className = 'form-control'
//     input.placeholder = 'e.g ...'
//
//     addIngre.appendChild(input)
// }

// document.querySelector('.btnStep').onclick = () =>{
//     const input = document.createElement('input')
//     input.type = 'text'
//     input.className = 'form-control'
//     input.placeholder = 'e.g ...'
//
//     addStep.appendChild(input)
// }
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

function readURL(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-upload-wrap').hide();

        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();

        $('.image-title').html(input.files[0].name);
      };

      reader.readAsDataURL(input.files[0]);

    } else {
      removeUpload();
    }
  }

  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });
