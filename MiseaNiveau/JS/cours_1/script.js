/* eslint-disable no-plusplus */
/* eslint-disable no-param-reassign */
/* eslint-disable no-console */
// eslint-disable-next-line no-console

// exercice 3, function

function helloWorld() {
  console.log('Heelow World !');
}

window.addEventListener('load', () => {

});

helloWorld();

function helloPrenom(e) {
  console.log('Bonjour', e);
}
helloPrenom('Hugo');

function calculPrixTTC(prixHT, tva = 20) {
  // eslint-disable-next-line no-param-reassign
  tva /= 100;
  console.log('le prix est de ', prixHT + prixHT * tva);
}
calculPrixTTC(100);

// exercice 4, funciton fléché
const testArrow = () => console.log('voici le texte de la fonction');
testArrow();

// const testArrow2 = () => console.log('voici le texte de la fonction');return this;
// testArrow2();

const multiPar10 = (x) => console.log(x * 10);
multiPar10(10);

const multiDeuxNombres = (x, y) => console.log(x * y);
multiDeuxNombres(10, 4);

// exercice 5, if/else

function max(x, y) {
  console.log(Math.max(x, y));
}
max(5, 100);

function max3(x, y, z) {
  console.log(Math.max(x, y, z));
}
max3(5, 100, 1000);

const e = 1;
switch (e) {
  case 1:
    console.log('lundi');
    break;
  case 2:
    console.log('mardi');
    break;
  case 3:
    console.log('mercredi');
    break;
  case 4:
    console.log('jeudi');
    break;
  case 5:
    console.log('vendredi');
    break;
  case 6:
    console.log('samedi');
    break;
  case 7:
    console.log('dimanche');
    break;

  default:
    console.log(`Sorry, we are out of ${e}.`);
    break;
}

// exercice 6 for/while

function factorielleFor(value) {
  const valueMax = value;
  for (let i = 1; i < valueMax; i++) {
    console.log((value *= i));
  }
}
factorielleFor(10);
