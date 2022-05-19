<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    public Request $request;
    public Response $response;
        
    public function __construct(Request $request, Response $response)
    {
           $this->request = new Request();
           $this->response = new Response();
    }
    /**
     * get
     *
     * @param  mixed $path
     * @param  mixed $callback
     * @return void
     */
    public function get($path,$callback){

           $this->routes['get'][$path] = $callback;
    
    }
    public function post($path,$callback){

       $this->routes['post'][$path] = $callback;

}

    public function resolve(){
           $path = $this->request->getPath();
           $method = $this->request->getMethod();
           $callback = $this->routes[$method][$path] ?? false;
           if($callback == false){
                     $this->response->setStatusCode(404);
                     return $this->renderView("_404");
            }
            if(is_string($callback)){
                return $this->renderView($callback);
            }
            if (is_array($callback)) {
              $controller = new $callback[0];
              Application::$app->controller = $controller;
              $callback[0] = $controller;
          }
          return call_user_func($callback, $this->request);
            return call_user_func($callback);
    }

    public function renderView($view, $params = []){
          $layoutContent = $this->layoutContent();
          $viewContent = $this->renderOnlyView($view,$params);
          return str_replace('{{ content }}', $viewContent,$layoutContent);
    }
    protected function  layoutContent(){
            ob_start();
               include_once  Application::$ROOT_DIR."/views/layouts/main.php";
            return ob_get_clean();
    }
    protected function renderOnlyView($view,$params){
              echo "<pre>";
              print_r($params);
              echo "</pre>";
              exit;
         foreach ($params as $key => $value) {
               $$key = $value;
         }

         ob_start();
         include_once  Application::$ROOT_DIR."/views/$view.php";
         return ob_get_clean();
    }
    protected function renderContent($viewContent){
       $layoutContent = $this->layoutContent();
       return str_replace('{{ content }}', $viewContent,$layoutContent);
  }
}
