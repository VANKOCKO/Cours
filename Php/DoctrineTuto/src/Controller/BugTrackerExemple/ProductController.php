<?php 


namespace src\Controller\BugTrakerExemple;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class ProductController {


      private $loader;
      private $twig;      
      /**
       * __construct
       *
       * @return void
       */
      public function __construct(){
      
        $this->loader =  new \Twig\Loader\FilesystemLoader('./BugTrackerExemple/produit');
        $this->twig =  new \Twig\Environment($this->loader,[ ]);

      } 
      /**
       * index
       *
       * @return void
       */
      public function create(){
          // render templates
         echo $this->twig->render('create.html.twig', 
                   [
                       'create ' => 'create page'
                  ]);

      }
      public function read(){
        // render templates
        echo  $this->twig->render('read.html.twig', 
               [ 
                 'read' => 'read page'
                ]);
    }
    public function update(){
      // render templates
      echo  $this->twig->render('update.html.twig', 
             [
               'update' => 'update page'
              ]);

  }

  public function delete(){
    // render templates
    echo  $this->twig->render('delete.html.twig', 
         [
               'delete' => 'delete page'
          ]);

}


}


?>