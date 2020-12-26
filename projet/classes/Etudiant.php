<?php


class Etudiant extends ClasseGenerique
{
  private $_prenom;
  private $_nom;
  const ECOLE = "Ieps Fléron";

  private static $_nombreObjetsCrees = 0;

  //CONSTRUCTEUR 
  public function __construct(array $data = null)
  {
    parent::__construct($data);
    SELF::$_nombreObjetsCrees++;

  }

  //DESTRUCTEUR 
  public function __destruct()
  {
    // parent::__destruct();
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

  public function getNom()
  {
    return $this->_nom;
  }

  //SETTERS
  public function setPrenom(string $data = null)
  {
    if ($data) :
      $this->_prenom = $data;
    endif;
  }

  public function setNom(string $data = null)
  {
    if ($data) :
      $this->_nom = $data;
    endif;
  }

  //AUTRES METHODES
  public function hydrater(array $data = null)
  {
    if ($data) :
      foreach ($data as $propriete => $valeur) {
        $nomMethode = "set" . ucfirst($propriete);

        if (method_exists($this, $nomMethode)) :
          $this->$nomMethode($valeur);
        endif;
      }
    endif;
  }
}
