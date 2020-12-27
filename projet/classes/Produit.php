<?php

class Produit extends ClasseGenerique
{
  private $_nom;
  private $_prixHTVA;
  private $_disponible = true;
  private $_tva = .21;

  private static $_nombreProduits = 0;


  //CONSTRUCTEUR
  public function __construct(array $data = null)
  {
    parent::__construct($data);
    SELF::$_nombreProduits++;
  }

  //GETTER
  public function getNom()
  {
    return $this->_nom;
  }

  public function getTva()
  {
    return ($this->_tva * 100) . "%";
  }

  public function getPrixHTVA()
  {
    return $this->_prixHTVA;
  }

  public function getPrixTvac()
  {
    return $this->_prixHTVA * (1 + $this->_tva);
  }

  public static function getNombreProduits()
  {
    return SELF::$_nombreProduits;
  }

  //SETTERS
  public function setNom(string $data = null)
  {
    if ($data) :
      $this->_nom = $data;
    endif;
  }

  public function setPrixHTVA(float $data = null)
  {
    if ($data) :
      $this->_prixHTVA = $data;
    endif;
  }

  public function setTva(float $data = null)
  {
    if ($data) :
      $this->_tva = $data;
    endif;
  }
}
