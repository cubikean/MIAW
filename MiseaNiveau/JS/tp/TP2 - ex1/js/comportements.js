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
    elem2.classList.remove('control');
    elem2.classList.add('inverse');
} 

// Exercice 3
document.querySelector('#reussite').innerHTML = 'Ah ok, jai compris';
let valueAlt = document.querySelector('#dog').getAttribute('alt');
console.log(valueAlt);
document.querySelector('#legendeDog').innerHTML = valueAlt;


// Exercice 4
document.querySelector('#boutonEffacerEx4').addEventListener('click', ()=>{
    console.log('event detect')
    document.querySelector('#figureEx4 #dog').classList.add('invisible')
})

document.querySelector('#boutonAfficherEx4').addEventListener('click', ()=>{
    console.log('event detect')
    document.querySelector('#figureEx4 #dog').classList.remove('invisible')
})

document.querySelector('#boutonDoubleEx4').addEventListener('click', ()=>{
    if (document.querySelector('#figureEx4 #dog').classList.contains('invisible')){
        document.querySelector('#figureEx4 #dog').classList.remove('invisible')

    } else{
    document.querySelector('#figureEx4 #dog').classList.add('invisible')



    }
})

// Exercice 5
let listTetes = document.querySelectorAll('#liste_tetes li')

listTetes.forEach(tete => {
    tete.classList.add('penche')
});


let h2 = document.querySelectorAll('h2')

h2.forEach(h2Center => {
    h2Center.classList.add('centre')
});


// Exercice 6


document.querySelector('#ex6 img').addEventListener('click', ()=>{
    if (document.querySelector('#ex6 img').classList.contains('penche')){
        document.querySelector('#ex6 img').classList.remove('penche')

    } else{
        document.querySelector('#ex6 img').classList.add('penche')

    }
})


document.querySelector('img').addEventListener('click', ()=>{
    document.querySelector('#ex6 img').classList.remove('penche')
    if (!document.querySelector('img').classList.contains('penche')){
        document.querySelector('#ex6 img').classList.add('penche')
    }

})

document.querySelectorAll('#liste_tetes img').forEach(item => {
    item.addEventListener('mouseover', ()=>{
        item.parentElement.classList.add('penche')
    
    })
    item.addEventListener('mouseleave', ()=>{
        item.parentElement.classList.remove('penche')
    
    })
});



});

