<?php

//----------Vidéo 1 Encapsulation----------
//Encapsulation : tout mettres en private et décider de se qu'on 
//veut rendre publique


class Etudiant
{
  private $_prenom;
  private $_nom;

  //Getters
  public function getPrenom()
  {
    return $this->_prenom;
  }

  public function getNom()
  {
    return $this->_nom;
  }

  //Setters
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
}

// Utilisation des objets
$etudiant1 = new Etudiant();
$etudiant1->setPrenom("Pascal");

echo $etudiant1->getPrenom();
