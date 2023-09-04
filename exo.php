<?php
/* exo1 
$a = 12;
$b = 10;

$total = $a + $b;
echo $total;
echo "&nbsp"; 

/* exo2 

$a = 5;
$b = 3;
$c = $a + $b;

echo $a;
echo "&nbsp"; 
echo $b;
echo "&nbsp"; 
echo $c;
echo "&nbsp"; 

$a = 2;
echo $a;
echo "&nbsp"; 

$c = $b - $a;

echo $a;
echo "&nbsp"; 
echo $b;
echo "&nbsp"; 
echo $c;
echo "&nbsp"; 

 exo3 

$a = 15;
$b = 23;

echo $a;
echo "&nbsp"; 
echo $b;
echo "&nbsp"; 

$c = $a;
$a = $b;
$b = $c;

echo $a;
echo "&nbsp"; 
echo $b;
echo "&nbsp"; 


$price  = 15;
$nmbr  = 6;
$tva  = 5.5;

echo $price;
echo "&nbsp"; 
echo $nmbr; 
echo "&nbsp"; 
echo $tva;
echo "&nbsp"; 

$tva = ($price * $nmbr) * 5.5 / 100;
$total = ($price * $nmbr) + $tva;

echo($total);


*/


// function calculTva(float $price, $nmbr, $tva){
//     $calculTva = ($price * $nmbr) * $tva / 100;
//     echo $total = ($price * $nmbr) + $calculTva; 

// }

//  calculTva(15, 6, 5.5);



// $a = "bonjour";
// echo "\$a ".$a;

// $a = "bon";
// $b = "jour";
// $c = 10;

// echo $a.$b.($c + 1); 

// $a ="bonjour";
// echo "<p>$a l’adrar</p>";

// function soustrait($a, $b){
//     return $a - $b;
// }

// $result = soustrait(15, 23);
// echo $result;

/* Exercice 1 :
-Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
-la fonction doit retourner le résultat (return).

Exercice 2 :  
-Créer une fonction qui prend en entrée un nombre à virgule (float),
- la fonction doit retourner l’arrondi (return) du nombre en entrée (utiliser une fonction interne au langage). 

Exercice 3 :
-Créer une fonction qui prend en entrée 3 valeurs et retourne somme des 3 valeurs.

Exercice 4 :
-Créer une fonction qui prend en entrée 3 valeurs et retourne la valeur moyenne des 3 valeurs (saisies en paramètre).

*/

// function rounded($numbrVirgule) {
//     return round($numbrVirgule);
// }

// $result = rounded(18.5);
// echo $result;

// function balek($a, $b, $c){
//     return $a + $b + $c;
// }

// $resultat = balek(3, 3, 3);
// echo $resultat;

// function moyenne($a, $b, $c){
//     return ($a + $b + $c) / 3;
// }

// $resultat = moyenne(3 , 3 , 3);
// echo $resultat;

// exercice function 01
// */
// function soustrait(int | float  $a, int | float $b): int | float {
//     $result = $b - $a;
//     return $result;
// }

// echo soustrait(5, 10);
// echo "\n";

/*
exercice function 02
*/

// function arrondi(int|float $float) : int|float {
//     return round($float);
// }


// echo arrondi(18.765);
// echo "\n";
// /*
// exercice function 03
// */

// function additionne3(int | float $a, int | float $b, int | float $c): int | float{
//     return $a + $b + $c;
// }

// echo additionne3(5, 8, 156);
// echo "\n";
// /*
// exercice function 04
// */

// function moyenne3(int | float $a, int | float $b, int | float $c): int | float{
//   return  round(($a + $b + $c)/3);
// }

// echo moyenne3(5, 8, 156);
// echo "\n";

function posNeg($a){
    if($a > 0){
        return 'a est positif';
    } else {
        return 'a est negatif';
    }
}

$result = posNeg(-15);
echo $result;

?>

