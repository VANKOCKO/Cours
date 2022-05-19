<?php 
namespace App\Tests;

use src\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductsTest  extends DatabaseDependantTestCase {

 /** @test */
 public function a_product_can_be_created(EntityManagerInterface $entityManager ){
     
       // SETUP
       
       $name = 'Roland TD-07KV V-Drum Electronic Drum Kit BUNDLE';
       $description = 'Conveniently compact and ideal for drumming at home, the TD-07KV V-Drums kit delivers the superior expression and playability of high-end V-Drums in a budget-friendly package. ';
       $product = new Product();
       $product->setName($name);
       $product->setDescription($description);
       $product->setPrice(94400);

       //  DO SOMETHING
       $this->entitiManager->persist($product);
       $this->entitiManager->flush();

       // MAKE ASSERTIONS 

       $this->assertDatabaseHas(Product::class,
           [  
                 'name'=>$name,
                 'description' =>$description,

            ]);
}

}

?>