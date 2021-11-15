<?php

namespace App\Core;

use App\Controllers\MainController;

class Router
{
    public function run()
    {
        // delete trailing slash
        $uri = $_SERVER['REQUEST_URI'];
        //check if uri is not empty
        if (!empty($uri) && $uri[-1] === '/') {

            //delete /
            $uri = substr($uri, 0, -1);

            http_response_code(301);

            // redirect to uri
            header('Location: ' . $uri);
        }
        $params = [];
        if (isset($_GET['p'])) {
            $params = explode('/', $_GET['p']);
        }
        if ($params[0] != '') {
            
            $controller = '\\App\\Controllers\\'.ucfirst(array_shift($params)).'Controller';
            $controller = new $controller;

            //On recupere le 2ème parametre d'URL
            $action = (isset($params[0]))?array_shift($params):'index';

            if(method_exists($controller, $action)) {
                // Sil reste des parametres on les passes dans la methode
                (isset($params[0]))?$controller->$action($params):$controller->$action();
            } else {
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }
        } else {
            //no parameters
            //Instance controllerDefault
            $controller = new MainController;
            $controller->index();
        }
    }
}
