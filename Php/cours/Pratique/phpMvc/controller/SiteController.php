<?php

namespace app\controller;

use app\core\Application;

class SiteController
{
        
    /**
     * home
     *
     * @return void
     */
    public function home(){
        $params = [
            "name" => "TheCodeholic"
        ];
        return Application::$app->router->renderView('contact', $params);
    }    
    /**
     * contact
     *
     * @return void
     */
    public function contact(){
        return Application::$app->router->renderView('contact');
    }
    public function handleContact(){
        return 'handling submitted data';
    }
}
