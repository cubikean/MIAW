console.log("here")

window.addEventListener('load',()=>{

// Definition des constantes pour le menu
const bars = document.querySelector('.fa-bars')
const xmark = document.querySelector('.fa-xmark')
const disable = document.querySelector('.disable')
const body = document.querySelector('body')

// ouverture du menu
bars.addEventListener('click', ()=>{
    bars.style.display = "none"
    xmark.style.display = "block"
    disable.classList.remove('disable')
    body.style.overflow = 'hidden'
})

// fermeture du menu
xmark.addEventListener('click', ()=>{
    bars.style.display = "block"
    xmark.style.display = "none"
    disable.classList.add('disable')
    body.style.overflow = 'auto'
})



// Definition des constantes pour les cookies
const closeBtn = document.querySelector('.close-btn')
const cookiesBanner = document.querySelector('.cookies-banner')


// Fermeture de la popup cookies
closeBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    cookiesBanner.remove();
})


// fonction pour récupérer l'année actuelle, pour changer dynamiquement les credentials
function getCurrentYear() {
    return new Date().getFullYear(); // returns the year via local timing
  };

document.getElementById("YearDate").innerHTML = `${getCurrentYear()} `;

// Recuperer le nombre d'enfants dans le container, changer la valeur
const prestationCardContainer = document.querySelector('.prestation-card-container')
prestationCardContainer.style.setProperty('--nb-cards', prestationCardContainer.childElementCount) 



})

