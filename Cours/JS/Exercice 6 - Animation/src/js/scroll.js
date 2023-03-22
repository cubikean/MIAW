console.log("here");
const headerPrincipal = document.querySelector(".header-principal");

ScrollTrigger.create({
  trigger: headerPrincipal,
  start: "+=50",
  end: 99999,
  toggleClass: {
    className: "menu-principal--scrolled",
    targets: ".menu-principal",
  },
  
});

const showAnim = gsap.fromTo(
  ".top-scroller",
  {
    opacity: 0,
    paused: true,
    duration: 0.2,
  },
  {
    opacity: 1,
    paused: true,
    duration: 0.2,
  }
);


ScrollTrigger.create({
  trigger:headerPrincipal,
  start: "150px",
  onUpdate: (self) => {
    self.direction === 1 ? showAnim.play() : showAnim.reverse();
  },
  end: 99,
  x: 500,
});
