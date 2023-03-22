console.log("here accordion-plus");

const accordeonItems = document.querySelectorAll(".accordeon__item");
const accordeonDetails = document.querySelectorAll(".accordeon__details-item");
const accordeonVisu = document.querySelector('.accordeon__visualiseur');

for (let i = 0; i < accordeonItems.length; i++) {
  accordeonItems[i].addEventListener("mouseenter", (e) => {
    gsap.set(accordeonDetails[i], { height: 0 });
    gsap.to(accordeonDetails[i], { duration: 0.3, height: "auto" });
    accordeonVisu.innerHTML = accordeonItems[i].innerHTML;
    accordeonDetails[i].style.display = 'none';

    // accordeonDetails[i].style.height = 'auto';
  });
}

for (let i = 0; i < accordeonItems.length; i++) {
  accordeonItems[i].addEventListener("mouseleave", (e) => {
    gsap.set(accordeonDetails[i], { height: "auto" });
    gsap.to(accordeonDetails[i], { duration: 0.3, height: 0 });
  });
}


