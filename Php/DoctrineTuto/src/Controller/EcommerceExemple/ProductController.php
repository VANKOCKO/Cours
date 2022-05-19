<?php 
namespace src\Controller;

use src\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductController   {

 /** @test */
 public function creerProduit(){
       require dirname(__DIR__,2).'/bootstrap.php';
       /** @var \Doctrine\ORM\EntityManager $em */
       $em = $entityManager;
       $name = 'Roland TD-07KV V-Drum Electronic Drum Kit BUNDLE';
       $description = 'Conveniently compact and ideal for drumming at home, the TD-07KV V-Drums kit delivers the superior expression and playability of high-end V-Drums in a budget-friendly package. ';
       $product = new Product();
       $product->setName($name);
       $product->setDescription($description);
       $product->setPrice(94400);
       $em->persist($product);
       $em->flush(); 
}

}

$product = new ProductController();
$product->creerProduit();

?>