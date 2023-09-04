// // let a = 6;
// // let b = 36;
// let temp = a;
// let a = b;
// let b = temp;

// let A = "423";
// let B = "12";
// let C;
// C = A + B;

// console.log(C);

// let val = 231;
// let double = val * 2;
// console.log(val);
// console.log(double);



function recup() {
    let num = document.getElementById('input1').value;
    let carre = num ** 2;
    console.log(carre);
};

// Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui
// fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.



function affichage(prixHT, nmbrArticle, TVA) {
    console.log('le prix hors taxes est de ' + prixHT + '€ ' + "le nombre d'articles est de " + nmbrArticle + "€ " + "la TVA est de " + TVA + "% ");
    console.log('Le prix TTC est de ' + ((prixHT * nmbrArticle * TVA / 100) + (prixHT * nmbrArticle)) + "€ ");
}

affichage(18, 6, 20);

//Exo 6
// Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite si ce nombre est
// positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).

function posNum(a) {
    if (a > 0) {
        console.log('Ce nombre est positif');
    } else {
        console.log('Ce nombre est négatif');
    }
};
posNum(-45);

// Exercice 6.2 : Les tests :
// Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur produit est
// négatif ou positif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas
// calculer le produit des deux nombres.

function produit(a, b) {

    if ((a > 0 && b > 0) || (a < 0 && b < 0)) {
        console.log('le produit est positif');
    } else {
        console.log('le produit est négatif');
    }
}
produit(-18, -18);