<?php 

/**
 * Personnage
 */
class Personnage { 
    /**
     * vie
     *
     * @var int
     */
    protected $vie = 80;    
    /**
     * atk
     *
     * @var int
     */
    protected $atk = 20;    
    /**
     * nom
     *
     * @var mixed
     */
    protected $nom;
    /**
     * __construct
     *
     * @param  mixed $nom
     * @return void
     */
    public function __construct($nom){
       $this->nom = $nom;
    } 
    /**
     * getNom
     *
     * @return void
     */
    public function getNom(){
        return $this->nom;
    }     
    /**
     * setNom
     *
     * @param  mixed $nom
     * @return void
     */
    public function setNom($nom){
            $this->nom = $nom;
    }
        
    /**
     * getVie
     *
     * @return void
     */
    public function getVie(){
        return $this->vie;
    }
    /**
     * setVie
     *
     * @param  mixed $vie
     * @return void
     */
    public  function setVie($vie)
    {
        $this->vie = $vie;
    }
    
    /**
     * getAtk
     *
     * @return void
     */
    public function  getAtk(){
        return $this->atk;
    }
    
    /**
     * setAtk
     *
     * @param  mixed $atk
     * @return void
     */
    public  function setAtk($atk)
    {
        $this->atk = $atk;
    }
    /**
     * regenerer
     *
     * @param  mixed $vie
     * @return void
     */
    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100; 
        }else{
            $this->vie += $vie;
        }
    }    
    /**
     * mort
     *
     * @param  mixed $personnage
     * @return void
     */
    public function mort($personnage){
        if($personnage->vie == 0){
            echo "Le personnage du nom de : " .  $personnage->nom ." "." est mort";
        }else{
            echo "Le personnage du nom de : " .  $personnage->nom ." "."est vivant";

        }
           
    }
    
    /**
     * attaque
     *
     * @param  mixed $cible
     * @return void
     */
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();
      /* echo "<pre>";
        print_r($cible);
      echo "</pre>"; */
    }
    
    /**
     * empecher_negatif
     *
     * @return void
     */
    protected function empecher_negatif(){
        if($this->vie < 0 ) {
            $this->vie = 0 ;
        }
    }
} 

?>