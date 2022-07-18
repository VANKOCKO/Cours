<?php

namespace app ;

use app\core\Application;

class Controller
{

    public string $layout = 'main';
    public function setLayout($layout) : void {
        $this->layout = $layout;
    }
    public function render($view, $params = []) : String {
       return Application::$app->router->renderView($view,$params);
    }


}
