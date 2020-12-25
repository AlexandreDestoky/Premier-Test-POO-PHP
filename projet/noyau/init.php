<?php

// require_once "classes/Etudiant.php"; 

function chargementAutomatiqueDesClasses(string $classe = null) {
  if($classe):
    require_once "classes/" . $classe . ".php";
  endif;
}

spl_autoload_register("chargementAutomatiqueDesClasses");