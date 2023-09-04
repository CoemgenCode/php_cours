<?php 

if(isset($_POST['nmbr1']) && isset($_POST['nmbr2']) && isset($_POST['operateur'])){
    $nombr1 = $_POST['nmbr1'];
    $nombr2 = $_POST['nmbr2'];
    $operateur = $_POST['operateur'];
 

    echo "le resultat : ";

    if ($operateur=="+") {
       echo $nombr1 + $nombr2;
    }elseif ($operateur == "-") {
        echo  $nombr1 - $nombr2;
    }elseif ($operateur == "/") {
        echo $nombr1 / $nombr2;
    }elseif ($operateur == "*") {
        echo $nombr1 * $nombr2;
    }  
    
    }else{ ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="resultat.php" method="post">
    <input name="nmbr1" type="number">
    <select name="operateur" id="op-select">
  <option value="">--Please choose an option--</option>
  <option  value="+">+</option>
  <option  value="-">-</option>
  <option  value="/">/</option>
  <option  value="*">*</option>
</select>
    <input name="nmbr2" type="number">
  
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php }
?>








