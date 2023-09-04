function recup() {

    let a = document.getElementById("carre").value;
    if (a == "") {
        console.log("des champs sont vides");
    }

    else if (a !== NaN) {
        result = a ** 2;
        document.getElementById('resultCarre').innerHTML = '<h3> le carré de ' + a + ' est ' + result + '</h3>';
    }
}



function prixTTC() {

    let prixHt = document.getElementById("prix").value;
    let nmbrArticle = document.getElementById("quantite").value;
    let tauxTva = document.getElementById("tva").value;

    if (prixHt == "" || nmbrArticle == "" || tauxTva == "") {
        document.getElementById('resultTTC').innerHTML = '<h3> un ou des champs sont vides </h3>';
    }

    else if (prixHt !== NaN && nmbrArticle !== NaN && tauxTva !== NaN) {
        resultat = (prixHt * nmbrArticle) * (1 + (tauxTva / 100));
        document.getElementById('resultTTC').innerHTML = '<h3> le prix TTC est : ' + resultat.toFixed(2) + '€' + '</h3>';
    }
}


function posOrNeg() {

    let nmbr = document.getElementById("posNeg").value;
    if (nmbr == "") {
        document.getElementById('resultPosNeg').innerHTML = '<h3> le champs est vide </h3>';
    }

    else if (nmbr < 0) {
        document.getElementById('resultPosNeg').innerHTML = '<h3> le resultat est négatif</h3>';
    } else {
        document.getElementById('resultPosNeg').innerHTML = '<h3> le resultat est positif</h3>';
    }

}


function produit() {
    let nmbr1 = document.getElementById("produit01").value;
    let nmbr2 = document.getElementById("produit02").value;
    if (nmbr1 == "" || nmbr2 == "") {
        document.getElementById('produit').innerHTML = '<h3> le ou les champs sont vides </h3>';
    }
    else if (nmbr1 > 0 && nmbr2 > 0) {
        document.getElementById('produit').innerHTML = '<h3> le resultat est positif</h3>';
    } else if (nmbr1 < 0 && nmbr2 < 0) {
        document.getElementById('produit').innerHTML = '<h3> le resultat est positif </h3>';
    } else {
        document.getElementById('produit').innerHTML = '<h3> le resultat est négatif </h3>';
    }
}


function names() {
    let nom1 = document.getElementById("nom1").value;
    let nom2 = document.getElementById("nom2").value;
    let nom3 = document.getElementById("nom3").value;
    if (nom1 == "" || nom2 == "" || nom3 == "") {
        document.getElementById('name').innerHTML = '<h3> le ou les champs sont vides </h3>';
    }
    else if ((nom1 < nom2 && nom2 < nom3) && (nom2 < nom3)) {
        document.getElementById('name').innerHTML = "<h3> les noms sont triés dans l'ordre alphabétiques</h3>";
    } else {
        document.getElementById('name').innerHTML = "<h3> les noms ne sont pas dans l'ordre alphabétiques </h3>";
    }
}


function produitNul() {
    let nmbr1 = document.getElementById("prod1").value;
    let nmbr2 = document.getElementById("prod2").value;
    if (nmbr1 == "" || nmbr2 == "") {
        document.getElementById('produit2').innerHTML = '<h3> le ou les champs sont vides </h3>';
    }
    else if (nmbr1 > 0 && nmbr2 > 0) {
        document.getElementById('produit2').innerHTML = '<h3> le resultat est positif</h3>';
    } else if (nmbr1 < 0 && nmbr2 < 0) {
        document.getElementById('produit2').innerHTML = '<h3> le resultat est positif </h3>';
    } else if (nmbr1 == 0 && nmbr2 == 0) {
        document.getElementById('produit2').innerHTML = '<h3> le resultat est null </h3>';
    } else {
        document.getElementById('produit2').innerHTML = '<h3> le resultat est négatif </h3>';
    }
}


function age() {
    let age = document.getElementById("agesCat").value;
    if (age >= 6 && age <= 7) {
        document.getElementById('age').innerHTML = '<h3> Poussin </h3>';

    } else if (age >= 8 && age <= 9) {
        document.getElementById('age').innerHTML = '<h3> Pupille </h3>';

    } else if (age >= 10 && age <= 11) {
        document.getElementById('age').innerHTML = '<h3> Minime </h3>'

    } else if (age >= 12) {
        document.getElementById('age').innerHTML = '<h3> Cadet </h3>'

    }
}


function incrementation(){
    let nombre =  document.getElementById("increment").value;
         nombre = parseInt(nombre)
         resultat = document.getElementById("resultat");
for(i=0; i<11; i++){
   console.log (nombre + i);
   resultat.innerHTML += "<h3>"+ (nombre + i) + "</h3>";

}
}

function table(){
    nombre2 =  document.getElementById("multiply").value;
    nombre2 = parseInt(nombre2)
    calcul = document.getElementById("calcul");
for(i=0; i<11; i++){
   calcul.innerHTML += "<h3>"+ nombre2 + "x" + i + "=" + nombre2*i + "</h3>";
}
}

function tableau(){
    let tableau = [];
    let tableauRemplis = document.getElementById('tableau');
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let age = document.getElementById('ages').value;

    tableau[0] = nom;
    tableau[1] = prenom;
    tableau[2] = age;

    for(i=0; i<tableau.length; i++){
        tableauRemplis.innerHTML += '<p>' + tableau[i] + '</p>';
    }
}