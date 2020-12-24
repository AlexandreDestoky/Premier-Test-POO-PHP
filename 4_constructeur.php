<?php

//----------Vidéo 4 constructeur----------
//Constructeur -> fonction prédéfinie avec __
//Constructeur se lance qd on créer un object
//Destructeur quand on détruit un objet (unset)
//SELF -> classe et pas l'objet créer comme this

class Etudiant
{
  private $_prenom;
  const ECOLE = "Ieps Fléron";

  private static $_nombreObjetsCrees = 0;

  //CONSTRUCTEUR 
  public function __construct()
  {
    SELF::$_nombreObjetsCrees++;
  }

    //DESTRUCTEUR 
    public function __destruct()
    {
      SELF::$_nombreObjetsCrees--;
    }


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
$etudiant2 = new Etudiant();
$etudiant1->setPrenom("Pascal");

echo $etudiant1->getPrenom();
echo "<br>";

echo Etudiant::ECOLE;
echo "<br>";

echo Etudiant::getNombreObjetsCrees();

unset ($etudiant2);

echo Etudiant::getNombreObjetsCrees();