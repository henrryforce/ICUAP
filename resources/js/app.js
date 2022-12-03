import './bootstrap'
// import './pruebaChart.js';
/* ********** Menu ********** */
;(d => {
    const $btnMenu = d.querySelector('.menu-btn'),
        $menu = d.querySelector('.menu')

    $btnMenu.addEventListener('click', e => {
        $btnMenu.firstElementChild.classList.toggle('none')
        $btnMenu.lastElementChild.classList.toggle('none')
        $menu.classList.toggle('is-active')
    })

    d.addEventListener('click', e => {
        if (!e.target.matches('.menu a')) return false

        $btnMenu.firstElementChild.classList.remove('none')
        $btnMenu.lastElementChild.classList.add('none')
        $menu.classList.remove('is-active')
    })
})(document)
document.addEventListener('DOMContentLoaded', load)
function load () {
    let ubi = document.body.baseURI
    if (ubi.includes('/administracion?')) {
        document
            .getElementById('btnAltaUser')
            .addEventListener('click', addUsuario)
    }
}
//Funcion para agregar usuarios
function addUsuario (e) {
    e.preventDefault()
    let data = new FormData(document.getElementById('formAltaUser'))    
    data.set("tipo_user",document.getElementById("tipo_user").selectedIndex);
    if(data.get("tipo_user")==0){
      addErrorDiv(document.getElementById('validarErrores'), "Debes seleccionar el tipo de usuario")
                    setTimeout(() => {
                        eliminaNodos(document.getElementById('validarErrores'))
                    }, 3500)
    }else{
      fetch('../register', {
        method: 'POST',
        body: data
    })
        .then(res => res.json())
        .then(data => {
            let padre = document.getElementById('validarErrores')
            if (data != 'ok') {
                
                Object.keys(data).forEach(function (key) {
                    var value = data[key][0]
                    addErrorDiv(padre, value)
                    setTimeout(() => {
                        eliminaNodos(padre)
                    }, 3500)
                })
            }else{
              addSuccessDiv(padre,"Se agrego el usuario con exito");
              setTimeout(() => {
                eliminaNodos(padre)
                document.getElementById("formAltaUser").reset();
            }, 3500)
            }
        })
    }
    
}
function addErrorDiv (padre, mensaje) {
    let p = document.createElement('p')
    p.classList.add('bg-red-500')
    p.classList.add('text-white')
    p.classList.add('my-2')
    p.classList.add('rounded-lg')
    p.classList.add('text-sm')
    p.classList.add('p2')
    p.classList.add('text-center')
    p.innerText = mensaje
    padre.appendChild(p)
}
function addSuccessDiv (padre, mensaje) {
    let p = document.createElement('p')
    p.classList.add('bg-green-400')
    p.classList.add('text-white')
    p.classList.add('my-2')
    p.classList.add('rounded-lg')
    p.classList.add('text-sm')
    p.classList.add('p2')
    p.classList.add('text-center')
    p.innerText = mensaje
    padre.appendChild(p)
}
function eliminaNodos (padre) {
    padre.innerHTML = ''
}
