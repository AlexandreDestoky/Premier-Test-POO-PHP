<?php

require_once "noyau/init.php";

//----------Méthode 1 "Classique"----------

//Instanciation d'un objet
$etudiant1 = new Etudiant();

//Hydratation manuelle d'une propriétés
$etudiant1->setPrenom("Pascal");
$etudiant1->setNom("Lacroix");


//----------Méthode 2 "fct hydrater dans Etudiant.php----------

//Instanciation d'un objet
$etudiant2 = new Etudiant();

//Hydratation avec fonction
$etudiant2->hydrater([
  "prenom" => "Rémy",
  "nom" =>"Dupont"
]);


//----------Méthode 3 "lancement fct hydrater dans le construct----------

//Instanciation d'un objet et hydration en 1 seul étape
$etudiant3 = new Etudiant([
  "prenom" => "Julien",
  "nom" =>"Costenaro"
]);



//Utilisation de l'objet Etudiant
echo $etudiant1->getPrenom();
echo "<br>";
echo $etudiant2->getPrenom();
echo "<br>";
echo $etudiant3->getPrenom();
echo "<br>";
echo Etudiant::getNombreObjetsCrees();

echo "<hr>";

//Utilisation de l'objet Produit
$produit1 = new Produit([
  "nom"=> "une chausette",
  "prixHTVA" => 8.9
]);

$produit2 = new Produit([
  "nom"=> "une botte",
  "prixHTVA" => 15.80,
  "tva" => .06
]);

echo $produit1->getNom() . " : " . $produit1->getPrixTvac();
echo "<br>";
echo $produit2->getNom() . " : " . $produit2->getPrixTvac();
echo "<br>";
echo $produit2->getTva();