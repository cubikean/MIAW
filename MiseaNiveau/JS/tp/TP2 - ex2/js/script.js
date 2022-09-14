// Exercice 1

document.querySelector('#boutonSupprimerEx1').addEventListener('click', ()=>{
    let supp = document.querySelectorAll('ul li')
    let parent = document.querySelector('ul')
    parent.removeChild(supp[0])
})

// Exercice 2

document.querySelector('#boutonDeplacerEx2').addEventListener('click',()=>{
    let supp = document.querySelectorAll('#ex2 ul li')
    let parent = document.querySelector('#ex2 ul')
    parent.appendChild(supp[0])
})

// Exercice 3

document.querySelector('#ex3 #ingredients').addEventListener('click', ()=>{
    let supp = document.querySelector('#ingredients')
    supp.firstElementChild.classList.add('invisible');
})
document.querySelector('#ex3 .control').addEventListener('click', ()=>{
    document.querySelectorAll('#ingredients li').forEach(item => {
        item.classList.remove('invisible')
    });
})

// Exercice 4 

document.querySelector('#lesPrenoms').addEventListener('click', (e)=>{
    e.target.classList.add('invisible')
})

document.querySelector('#ex4 .control').addEventListener('click', ()=>{
    document.querySelectorAll('#lesPrenoms li').forEach(item => {
        item.classList.remove('invisible')
    });
})

// Exercice 5
document.querySelector('#lettresEtNombres').addEventListener('click', (e)=>{
    if (e.target.classList == "nombre"){
        document.querySelectorAll('.nombre').forEach(item=>{
            item.classList.add('invisible')
        })
    }
    if (e.target.classList == "texte"){
        document.querySelectorAll('.texte').forEach(item=>{
            item.classList.add('invisible')
        })
    }
})

document.querySelector('#ex5 .control').addEventListener('click', ()=>{
    document.querySelectorAll('#lettresEtNombres li').forEach(item => {
        item.classList.remove('invisible')
    });
})