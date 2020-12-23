<?php

//----------Vidéo 2 Constante----------
//Constante n'est pas lié a l'object créé mais a la class

class Etudiant
{
  private $_prenom;
  const ECOLE = "Ieps Fléron";

  //GETTERS
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
echo Etudiant::ECOLE;
