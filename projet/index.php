<?php

require_once "noyau/init.php";


$etudiant1 = new Etudiant();
$etudiant1->setPrenom("Pascal");

echo $etudiant1->getPrenom();

