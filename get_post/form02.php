<?php
require('calcul.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action = "form.php" method ="post" >
        <input name="nmbr1" type="number">
        <input name="nmbr2" type="number">
        <input type="submit" name="submit">
    </form> -->

    <form action = "form02.php" method ="post" >
        <p>Prix Hors Taxes :</p>
        <input name="prixHT" type="number">
        <p>Quantité :</p>
        <input name="nmbrArticle" type="number">
        <p>TVA :</p>
        <input name="TVA" type="number">
        <input type="submit" name="submit">
    </form>
</body>
</html>