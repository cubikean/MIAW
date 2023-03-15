console.log('here');

let AllClose = document.querySelectorAll('.suppression');

AllClose.forEach(item => {
    item.addEventListener('click', (e)=>{
        e.target.closest('.equipier').remove()
    })
});

let AllMin = document.querySelectorAll('.gestion-taille');

AllMin.forEach(item => {
    item.addEventListener('click', (e)=>{
        let btnMin = e.target;
        btnMin.closest('.equipier').classList.toggle('equipier--reduit')
        btnMin.closest('.equipier').classList.contains('equipier--reduit') ? btnMin.innerText = '+' : btnMin.innerText = '-';
        btnMin.closest('.equipier__controles').nextElementSibling.querySelector('img').classList.toggle('equipier__image--retourne')
    })
});