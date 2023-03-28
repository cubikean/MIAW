console.log('here');

const btnMenu = document.querySelector('.main-menu_toggler')
const menu = document.querySelector('.main-menu')
const ulActive = document.querySelector('.main-menu_list')
const listItems = document.querySelectorAll('.main-menu_list_item')

btnMenu.addEventListener('click', ()=>{

    menu.classList.toggle('main-menu--active')
    ulActive.classList.toggle('main-menu_list--active')

})


if (window.innerWidth <= 768) {
    listItems.forEach(item => {
        item.addEventListener('click', ()=>{
            menu.classList.toggle('main-menu--active')
            ulActive.classList.toggle('main-menu_list--active')
        })
    });
}

function getCurrentYear() {
    return new Date().getFullYear(); // returns the year via local timing
  };

document.querySelector('.year-date').innerHTML = `© ${getCurrentYear()}`;