<?php 
/* exo1 */
$tableau = array();
for($i=0; $i<50; $i++){
    $tableau[] = rand(-100,100);
    echo '<br>';
    echo "$i =>". $tableau[$i];
}
echo '<br>';
var_dump(count($tableau));

/* exo2 */
$max = 0;
for($i=0; $i<count($tableau); $i++){
    if($tableau[$i] > $max){
        $max = $tableau[$i];
    }
}
echo '<br>';
echo "la valeur max du tableau est" . ' ' . $max ;
echo '<br>';
echo max($tableau);

/* exo3 */
$sum = array_sum($tableau);
$moyenne = $sum / count($tableau);

echo '<br>';
echo $moyenne;


/* exo 4*/
$min = 0;
for($i=0; $i< count($tableau); $i++){
    if($tableau[$i] < $min){
        $min = $tableau[$i];
    }
}
echo '<br>';
echo "la valeur min du tableau est" . ' ' . $min ;

/* exo 5*/

echo '<br>';
$tableau2= range(0, 100);
$tab3 = [];

foreach ($tableau2 as $value) {
    if(nbPremier($value)){
        array_push($tab3, $value);
    }
}

function nbPremier(int $nombre):bool{
   
    if($nombre < 2){
        return false;
    }
    for($i=2; $i < ($nombre); $i++){
        if ($nombre % $i === 0)
        return false;
    }
    return true;
}
echo "<ul id=ul>";
foreach ($tab3 as $value) {
    echo "<li id=li><h1 id=titre> $value </h1></li>";
    
}
echo "</ul>";


// for($i=0; $i<count($tableau2); $i++){
//     $nombrePremier = null;
// while(){

// }
// }
// print_r ($tableau2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        


        #titre{
            color: white;
            display: inline;
            list-style-type: none;
            border: solid 1px white;
            background-color: black;
            position: relative;
        }


        #li{
            color: red;
            position: relative;
            display: inline;
            list-style-type: none;
            align-items: center;
            margin: auto 0;
            width: 100%;
            
        }

        #ul{
        
           
         
        }

    </style>
</head>
<body>
    
</body>
</html>