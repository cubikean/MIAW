setTimeout(() => {
    const voyage = document.querySelectorAll(".voyage");
// voyage[0].addEventListener("click", (e) => {
//   console.log("c'est le permier voyage");
//   console.log("Destination du voyage :",e.currentTarget.lastElementChild.firstElementChild.textContent);
// console.log("référence du voyage : ", e.currentTarget.dataset.reference);
// e.currentTarget.classList.add("voyage--favori");
// });


// for (let i = 0; i < voyage.length; i++) {
//   voyage[i].addEventListener("click", (e) => {
//     e.currentTarget.classList.add("voyage--favori");
//   });
// }

voyage.forEach(unVoyage => {
    const etoile = unVoyage.firstElementChild
    etoile.addEventListener('click', (e)=>{
        e.currentTarget.parentElement.classList.toggle('voyage--favori')
        zoomAnimation(unVoyage)
    }) 
});

const vider = document.querySelector('.vider')
vider.addEventListener('click', ()=>{
    voyage.forEach(unVoyage => {
        unVoyage.classList.remove('voyage--favori')
    });
})

voyage.forEach(unVoyage => {
    const etoile = unVoyage.firstElementChild
    etoile.addEventListener('click', (e)=>{
        voyage.forEach(leVoyage => {
            if (leVoyage.classList.contains('voyage--favori')){
                console.log('Destination du voyage : ', leVoyage.lastElementChild.firstElementChild.textContent);
            }
        });
    }) 
});

gsap.set(voyage, { opacity: "0" });
gsap.to(voyage, {
  opacity: 1,
  stagger: 0.1,
  ease: Power1.easeIn,
  duration: .4,
});

function zoomAnimation(e){
    const zoom = gsap.to(e, {
        scale: 1.1,
        ease: Power1.easeOut,
        duration: .2,
        onComplete() {
            zoom.reverse()
          },
    });
}

}, 100);