<?php 

require '../vendor/autoload.php';
require '../config/routes.php';
use Illuminate\Support\Facades\Route;
use Nette\Routing\RouteList;
use src\Controller\BugTrakerExemple\ProductController as BugTrakerExempleProductController;
// use Symfony\Component\Routing\Generator\UrlGenerator;
// use Symfony\Component\Routing\Matcher\UrlMatcher;
// use Symfony\Component\Routing\RequestContext;
// use Symfony\Component\Routing\Route;
// use Symfony\Component\Routing\RouteCollection;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

// $router = new RouteList;
// $router->addRoute('/bugtracker/create', [
// 	'controller' => 'BugTrakerExempleProductController',
// ]);

// dd($router);
 
Route::get('/greeting', function () {
    return 'Hello World';
});


// $routes = new RouteCollection();
// $context = new RequestContext();
// $routes->add('bugtracker_Produit_create',new Route('/bugtracker/create', ['_controller' => BugTrakerExempleProductController::class]));
// $routes->add('bugtracker_Produit_read',new Route('/bugtracker/read', ['_controller' => BugTrakerExempleProductController::class]));
// $routes->add('bugtracker_Produit_update',new Route('/bugtracker/update', ['_controller' => BugTrakerExempleProductController::class]));
// $routes->add('bugtracker_Produit_delete',new Route('/bugtracker/delete', ['_controller' => BugTrakerExempleProductController::class]));
// $matcher = new UrlMatcher($routes,$context);


// $parameters = [
//     '_controller' => 'App\Controller\BlogController',
//     'slug' => 'lorem-ipsum',
//     '_route' => 'blog_show'
// ]