//MENU RESPONSIVE
const button = document.querySelector('.button')
const nav    = document.querySelector('.nav')

button.addEventListener('click',()=>{
    nav.classList.toggle('activo')
})

//MENU ESTATICO
var header = document.getElementById('Header')

window.addEventListener('scroll',()=>{
    var scroll=window.scrollY
    if(scroll>10){
        header.style.backgroundColor = '#292929'
    }else{
        header.style.backgroundColor='#292929'
    }
})
