<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>T-shirt</Title>
    </head>
<body>  
<?php
include("Affichage.php");
include("gestion-produit.php");
$nomproduit = "T-shirt femme" ;
$couleur = "Rouge" ;
$prix = 15.50 ; 
$quantite = 10 ;
$disponible = true;
$nb_ajout= 5;
$nb_achat= 5;
afficher_produit($nomproduit, $couleur, $prix, $disponible);
update_dispo($quantite);  
afficher_produit ($nomproduit, $couleur, $prix, $disponible);
$quantite=achat ($quantite, $nb_ajout);
update_dispo($quantite);
afficher_produit($nomproduit, $couleur, $prix, $disponible);
$quantite=achat($quantite, $nb_ajout);
update_dispo($quantite);
afficher_produit($nomproduit, $couleur, $prix, $disponible);
$quantite=restockage($quantite, $nb_ajout);
update_dispo($quantite);
afficher_produit($nomproduit, $couleur, $prix, $disponible);
?>
</body>
</html>