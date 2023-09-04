<?php 
/* exo 1 */
// function posNeg($a){
//     if($a > 0){
//         return 'a est positif';
//     } else {
//         return 'a est negatif';
//     }
// }
// $result = posNeg(-15);
// echo $result;

// /* exo 2 */
// function bigNumber($a, $b, $c){
//     if($a>$b && $a>$c){
//         return $a;
//     } else if ($b>$a && $b>$c) {
//         return $b;
//     }else{
//         return $c;
//     }
// }
// $resultat = bigNumber(-15, 180, 120);
// echo $resultat;

// /* exo 3 */
// function smallNumber($a, $b, $c){
//     if($a<$b && $a<$c){
//         return $a;
//     } else if ($b<$a && $b<$c) {
//         return $b;
//     }else{
//         return $c;
//     }
// }
// $resultat = smallNumber(-133, -10, 3);
// echo $resultat;

//     }else{
//         return $prix;
//     }
// }
// $resultat = calculePrixFinal(1100);
// echo $resultat;/* exo 4 */
// function calculePrixFinal(float $prix):float{
//     if($prix > 2000){
//         return $prix - ($prix * 0.20);
//     }elseif ($prix > 1000) {
//         return $prix - ($prix * 0.10);


/* exo 5 */
// function year(int $year):int|string{
//     if($year <= 1582){
//         return "ça n'existait paaaaaaaaas";
//     }
// elseif($year%4 === 0 && $year%100 != 0 || $year%400 === 0){
//     return "c'est une année bissextile";
// }else{
//     return "ce n'est pas une année bissextile";
// }
// }
// $resultat = year(1504);
// echo $resultat;


/*Exercice 1 :
- Choisir un nombre compris entre 0 et 999
- A l’aide d’une boucle while, effectuez des tirages aléatoires (utilisation de la fonction PHP « rand() » jusqu’à trouver le bon nombre. 
- Affichez le nombre d’itérations nécessaires pour trouver le nombre*/




$numero = 15;

function nmbr (int $alea){
    $tirages = 0;
    $counter = 0;
    while($tirages != $alea){
        $tirages = rand(0,999);
        $counter++;
    }
    
    return $counter;
}

echo 'vous avez trouvé en'.' '.nmbr($numero).' '."essais.";






/*Exercice 2 :
- Choisir un nombre de lignes
- Choisir un nombre de colonnes
- A l’aide de boucles « for », obtenez le résultat suivant : 
0000000000
1111111111
2222222222
3333333333
4444444444
5555555555
6666666666*/


// function pyramide (int $col, $row){
//     for($i = 0 ; $i <= $row ; $i++){
//         echo str_repeat($i, $col);
//         echo '<br>';
//     }
// };

// pyramide(6, 6);

// /*Exercice 3 :
// - Ecrivez des boucles qui affichent ce qui est demandé
// - Le nombre de colonne à afficher dépend du n° de ligne, à la ligne i, il faut afficher i colonnes.
// - Le résultat attendu est celui-ci :
// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777/*

// function pyramides (int $col, $row){
//     for($i = 0 ; $i <= $row ; $i++){
//         echo str_repeat($i, $i);
//         echo '<br>';
//     }
// };

// pyramides(5, 7);

?>




