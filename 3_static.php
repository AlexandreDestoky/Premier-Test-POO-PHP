<?php

//----------Vidéo 3 statique----------
//Static -> lier a la vlass et pas a l'objet (comme constante)
//SELF -> classe et pas l'objet créer comme this

class Etudiant
{
  private $_prenom;
  const ECOLE = "Ieps Fléron";

  private static $_nombreObjetsCrees = 0;



  //GETTERS

  public static function getNombreObjetsCrees() {
    return SELF::$_nombreObjetsCrees;
  }

  public function getPrenom()
  {
    return $this->_prenom;
  }

  //SETTERS
  public function setPrenom(string $data = null)
  {
    if ($data) :
      $this->_prenom = $data;
    endif;
  }
}

//UTILISATION
$etudiant1 = new Etudiant();
$etudiant1->setPrenom("Pascal");

echo $etudiant1->getPrenom();
echo "<br>";

echo Etudiant::ECOLE;
echo "<br>";

echo Etudiant::getNombreObjetsCrees();