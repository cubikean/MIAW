console.log('here');

const btnMenu = document.querySelector('.main-menu_toggler')
const menu = document.querySelector('.main-menu')
const ulActive = document.querySelector('.main-menu_list')

btnMenu.addEventListener('click', ()=>{

    menu.classList.toggle('main-menu--active')
    ulActive.classList.toggle('main-menu_list--active')

})