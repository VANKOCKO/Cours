<?php

namespace POO ;

/**
 * Client
 */
class Client
{
    private $listeCompte;
    private $nom;
    public function __construct($nom) {
            $this->nom = $nom;
    }    
    /**
     * setListCompte
     *
     * @param  mixed $compte
     * @return void
     */
    public function setListCompte($compte){
        $this->listeCompte[] = $compte;
    }    
    /**
     * getListCompte
     *
     * @return void
     */
    public function getListCompte(){
        return $this->listeCompte;
    }
    public function getNom(){
        return $this->nom;
    }
}
