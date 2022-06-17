<?php 


require 'Personnage.php';


/**
 *   Instance de la class 
 */
$merlin = new Personnage("Merlin");
/**
 *   Appel de methode d'instance d'elements 
 */
$merlin->regenerer();


$harry = new Personnage( "Harry");

$merlin->attaque($harry);



/* echo "<pre>";
  print_r($harry);
echo "</pre>";

echo "<pre>";
  print_r($merlin);
echo "</pre>"; */


?>