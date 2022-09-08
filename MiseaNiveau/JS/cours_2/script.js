console.log('%ccontenu html de la balise <p id="title"> : ', "color: red;padding: 2px",document.getElementById('titre').textContent)
console.log('%cla deuxieme balise <li> : ', "color: red;padding: 2px", document.querySelector('ul').children[1].innerHTML)
console.log(document.querySelector('ul').firstChild.nextSibling)
console.log('%cla balise <a> : ', "color: red;padding: 2px", document.querySelector('a'))
console.log('%cla balise <p> : ', "color: red;padding: 2px", document.querySelector('p'))

//exercice 1
//childNodes : Contains a Text node child
//children : No Element children.

let balise = document.createElement('p')
let contenu = document.createTextNode('test')
document.body.appendChild(balise)

const user = {
    name: 'pierre',
    mail: 'pierre@gmail.com',
    age: 32,
    friends: ['bob', 'mireille'],
    printFriends() {
        this.friends.forEach((x) => (
            console.log(`${this.name} a comme ami ${x}`)
    ));
    },
};
user.printFriends()

// sur les tableaux
const personne = {
    name: 'dupont',
    age: 34,
   }
const {name, age} = personne;

function sum(x, y, z) {
    return x + y + z;
   }
   const numbers = [1, 2, 3];
   console.log(sum(...numbers));


