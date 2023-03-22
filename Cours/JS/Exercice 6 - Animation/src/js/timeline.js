console.log("here");
const images1 = document.querySelectorAll(".episode1 .images img");

const episode1 = gsap.timeline()
episode1.from(images1[0], {duration:.2, y:-100})
episode1.from(images1[1], {duration:.2, x:100})
episode1.from(images1[2], {duration:.2, y:100})
episode1.from(images1[3], {duration:.2, x:-100})
episode1.from('.message-info__verso', {duration:.4, x:'-100%'})

const images2 = document.querySelectorAll(".episode2 .images img");

const episode2 = gsap.timeline({paused:true})
episode2.from(images2[0], {duration:.2, y:-100})
episode2.from(images2[1], {duration:.2, x:100})
episode2.from(images2[2], {duration:.2, y:100})
episode2.from(images2[3], {duration:.2, x:-100})
episode2.from('.message-info__verso', {duration:.4, x:'-100%'})



const btnPlay = document.querySelector(".lancement");
const btnRewind = document.querySelector(".retour");

btnPlay.addEventListener('click', ()=>{
  episode2.play()
})
btnRewind.addEventListener('click', ()=>{
  episode2.reverse()
})


const imagesDir = document.querySelectorAll(".episode3 .direction .images img");
const imagesTech = document.querySelectorAll(".episode3 .equipe-technique .images img");

const episode3Master = gsap.timeline({paused:false})

function Tech(){
const episode3Tech = gsap.timeline()
episode3Tech.from(imagesTech[0], {duration:.2, y:-100})
episode3Tech.from(imagesTech[1], {duration:.2, y:-100})
episode3Tech.from(imagesTech[2], {duration:.2, y:-100})
episode3Tech.from(imagesTech[3], {duration:.2, y:-100})
}

function Dir(){
const episode3Dir = gsap.timeline()
episode3Dir.from(imagesDir[0], {duration:.2, y:100, delay:.1})
episode3Dir.from(imagesDir[1], {duration:.2, y:100})
episode3Dir.from(imagesDir[2], {duration:.2, y:100, delay:.1})
}

episode3Master.add(Dir()).add(Tech())
