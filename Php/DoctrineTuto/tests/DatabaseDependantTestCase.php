<?php 
namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DatabaseDependantTestCase extends TestCase {          
          /**
           * entityManager
           *
           * @var mixed
           */
          private $entityManager;
                          
          /**
           * setUp
           *
           * @return void
           */
          protected function setUp(): void
          {
                parent::setUp();
               require 'bootstrap-test.php';
                $this->entityManager = $entityManager;
                SchemaLoader::load($this->entityManager);
          }          
          /**
           * tearDown
           *
           * @return void
           */
          protected function tearDown(): void
          {
              parent::tearDown();
              $this->entitiManager->close();
              $this->entitiManager = null;
          }
          
          /**
           * assertDatabaseHas
           *
           * @param  mixed $entity
           * @param  mixed $criteria
           * @return void
           */
          public function assertDatabaseHas(string $entity, array $criteria)
          {
                $result = $this->entityManager->getRepository($entity)->findOneBy($criteria);
                $this->assertTrue((bool) $result);
          }
}



?> 