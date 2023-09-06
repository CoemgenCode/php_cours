<?php 
require('config.php');

if (isset($_POST['nom_categorie'])) {
  $nomCategorie = htmlspecialchars($_POST['nom_categorie']);
  try{
    $req_cat = $db->prepare('INSERT INTO categorie (nom_categorie) VALUE (:nom_categorie)');
    $req_cat->bindParam('nom_categorie', $nomCategorie, PDO::PARAM_STR);
    $req_cat->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }

 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="categorie.php" method="post">
    <p>Ajouter une catégorie</p>
    <input type="text" name="nom_categorie">
    <input type="submit" value="Ajouter">
  </form>
</body>
</html>