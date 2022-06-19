<?php

namespace POO ;

/**
 * Form
 */
class Form
{
      
   /**
    * surround
    *
    * @var string
    */
   public $surround = 'p';
   /**
    * data
    *
    * @var mixed
    */
   private $data;   
   /**
    * __construct
    *
    * @param  mixed $tableau
    * @return void
    */
   public function __construct($data = array())
   {
       $this->data= $data;
   }  
      
   /**
    * surround
    *
    * @param  mixed $html
    * @return void
    */
   private  function surround($html)
   {
        return  "<{$this->surround}>$html</{$this->surround}>";
   }
   
   /**
    * getValue
    *
    * @param  mixed $index
    * @return void
    */
   private function getValue($index){
    
           return isset( $this->data[$index]) ? $this->data[$index] : null;
   } 
   /**
    * input
    *
    * @param  mixed $name
    * @return void
    */
   public function input($name){
       return  $this->surround('<input type="text" value="'.$this->getValue($name).'" name="'.$name.'">');
   }
   
   /**
    * submit
    *
    * @return void
    */
   public function submit(){
        return $this->surround( '<button type="submit">Envoyers</button>');

   }
}



