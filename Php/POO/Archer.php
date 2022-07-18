<?php
namespace POO;
use Personnage;
/**
 * Archer
 */
class Archer  extends Personnage 
{        
    /**
     * vie
     *
     * @var int
     */
    public $vie = 40;    
    /**
     * arc
     *
     * @var int
     */
    public $arc = 3;

   
    public function __construct($nom)
    {
        /**
         *  Modification des entites parents 
         */
        $this->vie = $this->vie / 2;
        /**
         *   Redefinition du constructeur du parent 
         */
        parent::__construct($nom);
    }
    /**
     * attaque
     *
     * @param  mixed $cible
     * @return void
     */
    public function attaque($cible){
        $cible->vie -= 2 * $this->atk;
       // $cible->empecher_negatif();
      //  parent::attaque($cible);
      /* echo "<pre>";
        print_r($cible);
      echo "</pre>"; */
    }
}


