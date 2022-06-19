<?php

namespace POO ;

/**
 * CompteBancaire
 */
class CompteBancaire
{      
      /**
       * idCompte
       *
       * @var mixed
       */
      private $idCompte;      
      /**
       * solde
       *
       * @var mixed
       */      
      /**
       * solde
       *
       * @var mixed
       */
      private $solde;      
      /**
       * __construct
       *
       * @param  mixed $idCompte
       * @param  mixed $solde
       * @return void
       */
      public function __construct($idCompte,$solde){
           $this->idCompte = $idCompte;
           $this->solde = $solde;
      }      
      /**
       * virement
       *
       * @param  mixed $beneficiaire
       * @param  mixed $montant
       * @return void
       */
      public function virement($beneficiaire, $montant){  
                 $this->solde -=  $montant;
                 $beneficiaire->solde += $montant;
                 return $beneficiaire->solde;
      }
      
      /**
       * getidCompte
       *
       * @return void
       */
      public function getidCompte(){
            return $this->idCompte;
      }      
      /**
       * getSolde
       *
       * @return void
       */
      public function getSolde(){
          return $this->solde;
      }      
      /**
       * setSolde
       *
       * @param  mixed $solde
       * @return void
       */
      public function setSolde($solde){
              $this->solde = $solde;
      }
 }
