const miawCards = document.querySelectorAll(".miaw-pcard--reduit");
const miawCardsSupp = document.querySelectorAll(".miaw-pcard__suppression");

miawCards.forEach((miawCard) => {
  miawCard.addEventListener("mouseover", (e) => {
    miawCard.classList.toggle("miaw-pcard--reduit");
  });
});

function createSuppBtn() {
  miawCards.forEach((item) => {
    //create element 
    let div = document.createElement("div");
    div.classList.add("miaw-pcard__suppression");
    div.appendChild(document.createTextNode("x"));
    item.appendChild(div);

    //event click on create element
    item.addEventListener("click", (e) => {
      e.target.parentElement.classList.add("invisible");
      setTimeout(() => {
        e.target.parentElement.remove();
      }, 600);
    });
  });
}

createSuppBtn();
