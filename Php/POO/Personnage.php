<?php 

class Personnage {
    public $vie = 80;
    public $atk = 20;
    public $nom;


    /**
     *  constructeur 
     */
    public function __construct($nom){
       $this->nom = $nom;
    }
    
    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100; 
        }else{
            $this->vie += $vie;
        }
    }
    public function mort($personnage){
        if($personnage->vie == 0){
            echo "Le personnage du nom de : " .  $personnage->nom ." "." est mort";
        }else{
            echo "Le personnage du nom de : " .  $personnage->nom ." "."est vivant";

        }
           
    }

    public function attaque($cible){
        $cible->vie = 20;
      echo "<pre>";
        print_r($cible);
      echo "</pre>";
    }
} 

?>