<?php

use POO\Archer;

require 'Personnage.php';
require 'Archer.php';

/**
 *   Instance de la class 
 */
/* $merlin = new Personnage("Merlin"); */
/**
 *   Appel de methode d'instance d'elements 
 */
/* $merlin->regenerer();

$merlin->getNom();
$harry = new Personnage( "Harry");

$merlin->attaque($harry);



echo "<pre>";
  print_r($harry);
echo "</pre>";

echo "<pre>";
  print_r($merlin);
echo "</pre>";
 */

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$legolas = new Archer("legolas");

$legolas->attaque($harry);
echo "<pre>";
   var_dump($merlin,$harry,$legolas);
echo "</pre>";

?>