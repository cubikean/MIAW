console.log('loader')

const loaderContainer = document.querySelector('.loader')
const loaderImgae = document.querySelector('.loader img')
const body = document.querySelector('body')

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  }
window.addEventListener('load', ()=>{
    window.scrollTo(0,0)
    body.style.overflowY = 'hidden'
})
setTimeout(() => {
    loaderContainer.style.animation = 'loaderGoTop 1s ease-in-out';
}, 1000);
setTimeout(() => {
    window.scrollTo(0,0)
    loaderContainer.style.display = 'none'
    body.style.overflowY = 'initial'
}, 1800);