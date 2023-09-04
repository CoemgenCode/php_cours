<?php 
if(isset($_POST['nmbr1']) && isset($_POST['nmbr2'])){
    $nmbr1 = $_POST['nmbr1'];
    $nmbr2 = $_POST['nmbr2'];
    $resultat = $nmbr1 + $nmbr2;
    echo "la somme est égale à" . ' ' . $resultat;
}


if(isset($_POST['prixHT']) && isset($_POST['nmbrArticle']) && isset($_POST['TVA']) ){
    $prixHT = $_POST['prixHT'];
    $nmbrArticle = $_POST['nmbrArticle'];
    $TVA = $_POST['TVA'];
    $resultat = ($prixHT * $nmbrArticle) + ($prixHT * $nmbrArticle * ($TVA/100));
    echo "le prix HT est de " . ' ' . $resultat;
}
?>