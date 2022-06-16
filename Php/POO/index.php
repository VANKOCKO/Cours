<?php 


require 'Personnage.php';



$merlin = new Personnage();
$merlin->regenerer();

$harry = new Personnage();


echo "<pre>";
  print_r($harry);
echo "</pre>";

echo "<pre>";
  print_r($merlin);
echo "</pre>";


?>