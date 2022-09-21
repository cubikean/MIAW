console.log('here')

let input = document.querySelector('#saisieNbTS');



input.addEventListener('input', ()=>{
    let inputValue = input.value;


    let shirts = '';
    if (inputValue >= 2){
        shirts = shirts + 's';
    }
    console.log(shirts)
    let prixTS = inputValue * 15;



    let fraisPort = 5;

    if (prixTS >= 50){
        fraisPort = 0
    }


    document.querySelector('#zoneRetourClient').innerHTML = `Vous avez pris ${inputValue} T-Shirt${shirts}, pour un motant de ${prixTS+fraisPort} €, frais de port inclut`;
})

