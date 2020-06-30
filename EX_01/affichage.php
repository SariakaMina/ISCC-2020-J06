<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>T-shirt</Title>
    </head>
<body>  
<?php
    function afficher_titre($nomproduit) {
        $phrase="Fiche produit: $nomproduit";
        echo "<h1>$phrase</h1>";
    }
    function afficher_description($couleur, $prix)
    {
       $phrase1="Couleur: $couleur Prix: $prix";
       echo "<p>$phrase1</p>";
    }
function afficher_produit($nom_produit, $couleur, $prix, $disponible) {
    if ($disponible==true) {
        afficher_titre($nom_produit);
        afficher_description($couleur, $prix);
    }
    elseif ($disponible==false) {
    $hi="Le produit $nom_produit n est malheureusement plus disponible.";
    echo "<p> $hi </p>";
    }
}
?>
</body>
</html>
