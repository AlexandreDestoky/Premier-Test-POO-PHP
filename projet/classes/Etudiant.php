<?php


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

  public static function getNombreObjetsCrees()
  {
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
