<?php

namespace app\core;


class Application
{
    public static String $ROOT_DIR;
    public Request $request;
    public Router $router;
    public Response $response;
    public static Application $app;
        
    /**
     * __construct
     *
     * @return void
     */
    public function __construct($rootPath)
    {
         self::$app = $this;
         self::$ROOT_DIR = $rootPath;
         $this->request = new Request();
         $this->response = new Response();
         $this->router = new Router($this->request,$this->response);      
    }    
    /**
     * run
     *
     * @return void
     */
    public function run(){
         echo $this->router->resolve();
    }

}
