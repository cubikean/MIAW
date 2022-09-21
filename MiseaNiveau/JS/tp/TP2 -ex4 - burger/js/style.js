document.querySelector('#ouverture_menu ').addEventListener('click', ()=>{
    document.querySelector('#menu').classList.add('ouvert')
})

document.querySelector('#fermeture_menu ').addEventListener('click', ()=>{
    document.querySelector('#menu').classList.remove('ouvert')
})