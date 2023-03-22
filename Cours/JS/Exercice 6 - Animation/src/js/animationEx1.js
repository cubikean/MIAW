console.log("here");
const images = document.querySelectorAll(".images img");
images[0].style.left = "-300";

gsap.set(images[0], { x: -200 });
gsap.to(images[0], { duration: 1, x: 0 });

gsap.set(images[1], { opacity: 0 });
gsap.to(images[1], { duration: 2, opacity: 1 });

gsap.set(images[2], { transformOrigin: "50% 50%" });
gsap.to(images[2], { duration: 2, rotation: 360 });

gsap.set(images[3], { transformOrigin: "50% 50%", x: 300 });
gsap.to(images[3], { duration: 2, x: 0, rotation: -360 });

gsap.fromTo(
  "#affichageChrono",
  {
    textContent: 35,
    duration: .8,
    ease: Power1.easeIn,
    snap: { textContent: 1 },
    stagger: 1,
  },
  {
    textContent: 0,
    duration: .8,
    ease: Power1.easeIn,
    snap: { textContent: 1 },
    stagger: 1,
    onComplete() {
      document.querySelector("#affichageChrono").innerHTML = "FIN";
    },
  }
);

const images2 = document.querySelectorAll(".episode2 .images img");

gsap.fromTo(
  images2,
  {
    y: -150,
    stagger: 0.1,
    ease: Power1.easeIn,
    duration: 0.6,
  },
  {
    y: 0,
    stagger: 0.1,
    ease: Power1.easeIn,
    duration: 0.6,
  }
);

const images3 = document.querySelectorAll(".episode3 .images img");

const btnPlay = document.querySelector(".lancement");
const btnStop = document.querySelector(".arret");

gsap.set(images3, { y: "-101%" });
const animation = gsap.to(images3, {
  y: 0,
  stagger: 0.5,
  ease: Power1.easeIn,
  duration: 0.6,
  paused: true,
});
btnPlay.addEventListener('click', ()=>{
    animation.play()
})
btnStop.addEventListener('click', ()=>{
    animation.pause()
})
// btnStop.onclick = animation.pause();
// btnPlay.onclick = animation.play();
