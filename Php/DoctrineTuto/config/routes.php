<?php 
// config/routes.php
require '../vendor/autoload.php';
use src\Controller\BugTrakerExemple\ProductController as BugTrakerExempleProductController;
// use Symfony\Component\Routing\Generator\UrlGenerator;
// use Symfony\Component\Routing\Matcher\UrlMatcher;
// use Symfony\Component\Routing\RequestContext;
// use Symfony\Component\Routing\Route;
// use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('bugtracker_Produit_create', '/bugtracker/create')
        // the controller value has the format [controller_class, method_name]
        ->controller([BugTrakerExempleProductController::class, 'create'])

        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
    ;

};




// $routes = new RouteCollection();
// $context = new RequestContext();
// $routes->add('bugtracker_Produit_create',new Route('/bugtracker/create', ['_controller' => BugTrakerExempleProductController::class]));
// $routes->add('bugtracker_Produit_read',new Route('/bugtracker/read', ['_controller' => BugTrakerExempleProductController::class]));
// $routes->add('bugtracker_Produit_update',new Route('/bugtracker/update', ['_controller' => BugTrakerExempleProductController::class]));
// $routes->add('bugtracker_Produit_delete',new Route('/bugtracker/delete', ['_controller' => BugTrakerExempleProductController::class]));
// $matcher = new UrlMatcher($routes,$context);
