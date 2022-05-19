<?php

Namespace src\Entity\EcommerceExemple;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Product")
 */
class Product {
       /**
        *@ORM\Id
        *@ORM\Column(type="integer")
        *@ORM\GeneratedValue
        */
       private $id;
       /**
        *@ORM\Column(type="string")
        */
       private $name;
        /**
        *@ORM\Column(type="text")
        */
       private $description;
        /**
        *@ORM\Column(type="integer")
        */
       private $price;
       /**
       *@ORM\Column(type="datetime", name="created_at")
       *@var \DateTimeInterface
       */
       private $createdAt;

       public  function __construct(){
        $this->createdAt = new DateTimeImmutable();
    }
       /**
        * Get *@ORM\Id
        */ 
       public function getId()
       {
              return $this->id;
       }

   
       /**
        * Get *@ORM\Column(type="string")
        */ 
       public function getName()
       {
              return $this->name;
       }

       /**
        * Set *@ORM\Column(type="string")
        *
        * @return  self
        */ 
       public function setName($name)
       {
              $this->name = $name;

              return $this;
       }

       /**
        * Get *@ORM\Column(type="text")
        */ 
       public function getDescription()
       {
              return $this->description;
       }
       /**
        * Set *@ORM\Column(type="text")
        *
        * @return  self
        */ 
       public function setDescription($description)
       {
              $this->description = $description;

              return $this;
       }
       /**
        * Get *@ORM\Column(type="integer")
        */ 
       public function getPrice()
       {
              return $this->price;
       }
       /**
        * Set *@ORM\Column(type="integer")
        *
        * @return  self
        */ 
       public function setPrice($price)
       {
              $this->price = $price;

              return $this;
       }

       /**
        * Get *@ORM\Column(type="datetime", name="created_at")
        */ 
       public function getCreatedAt()
       {
              return $this->createdAt;
       }

   
}



?>