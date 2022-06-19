<?php

use POO\Client;
use POO\CompteBancaire;
use POO\Form;
use POO\Text;

require 'Personnage.php';

require 'Form.php';
require 'Text.php';

require 'Client.php';
require 'CompteBancaire.php';


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


//$form = new Form( $_POST);


/**
 *    Creer Client 
 */

 $van = new Client("van");
 $sem = new Client("sem");

 /**
  *  Creer compte bancaire Client 
  */

  $compteBancaire = new CompteBancaire(1234,1000);
  $compteBancaire2 = new CompteBancaire(4567,2000);


  $compteBancaire3 = new CompteBancaire(7891,4000);
  $compteBancaire4 = new CompteBancaire(8912,5000);

  /**
   *   Ajout de compte bancaire sur le client 
   */
  $van->setListCompte($compteBancaire);
  $van->setListCompte($compteBancaire2);


  $sem->setListCompte($compteBancaire3);
  $sem->setListCompte($compteBancaire4);


  /**
   *    Faire un virement 
   */


   //  Van fait un virement de 10 Euros avec un de ses compte  sur un  des compte de sem 

   $soldeVirement = 0;
if($van->getNom() == $_POST['nomEmetteur']){
   echo "Virement emis par van"."  ";

   foreach ($van->getListCompte() as $key => $value){
  
                if($_POST['idCompteEmetteur'] == $value->getidCompte() ){
                    echo "sur le numero de compte numero" .$value->getidCompte();
                    $virement = new CompteBancaire($_POST['idCompte'],$value->getSolde());
                    $value->virement($virement,$_POST['mntVirement']);
                    $soldeVirement = $virement->getSolde();
                }
        
   }
}else {
   echo "Virement emis par sem";
}

?>

<ul>
  <h2><?=$van->getNom()?></h2>  
 <?php   foreach ($van->getListCompte() as $key => $value) : ?> 
          <li>
                  <p>Id Compte : <?=$value->getidCompte()?> | Solde  : <?=$value->getSolde()?> 
                       <form  action="#" method="post">
                            <input hidden name="nomEmetteur" value="<?=$van->getNom()?>">
                            <input hidden name="idCompteEmetteur" value="<?=$value->getidCompte()?>">
                            <input placeholder="Nom destinataire" name="nomDestinataire">
                            <input placeholder="id Compte" type="text" name="idCompte" id="">
                            <input placeholder="Mettre le montant " name="mntVirement"> 
                            <button type="submit">Virement</button>
                       </form>
                </p>
          </li>
   <?php endforeach ?> 
</ul>

     <h2> Faire Virement entre les deux comptes</h2>
<ul>
  <h2><?=$sem->getNom()?></h2>  
 <?php   foreach ($sem->getListCompte() as $key => $value) : ?>   
           
    <li>
                  <p>Id Compte : <?=$value->getidCompte()?> | Solde  : 
                  <?php     
                        if($_POST['nomDestinataire'] == $sem->getNom()){
                            if($_POST['idCompte'] == $value->getidCompte() ){
                                echo $soldeVirement;
                            }
                        }
                             
                    ?> 

                       <form  action="#" method="post">
                            <input hidden name="nomEmetteur" value="<?=$sem->getNom()?>">
                            <input placeholder="Nom destinataire" name="nomDestinataire">
                            <input placeholder="id Compte" type="text" name="idCompte" id="">
                            <input placeholder="Mettre le montant " name="mntVirement"> 
                            <button type="submit">Virement</button>
                       </form>
                </p>
          </li>
   <?php endforeach ?> 
</ul>
<!--<!DOCTYPE html>

<!--<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    
           <form method="post" action="#">
               <?php 
                    /* echo $form->input('username');
                    echo $form->input('password');
                    echo $form->submit();  */
               ?>      
           </form>
        
    </body>
</html>
-->

