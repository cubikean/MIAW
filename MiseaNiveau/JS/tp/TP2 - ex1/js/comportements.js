window.addEventListener('load', ()=>{

// Exercice 1
console.log('%cJe suis le programme principal !', "color: red;padding: 2px")
console.log(document.querySelector('#ingredients').children.length)

// Exercice 2
let elem2 = document.querySelector('#elemEx2');
let classes = elem2.classList;
const iterator = classes.values();

for (const value of iterator){
    console.log(`${value}`) 
}
if (elem2.classList.contains('control')){
    elem2.classList.remove('control')
    elem2.classList.add('inverse')
} 

// Exercice 3



});

