<?php

namespace App\Core;

use App\Controller\MainController;
use App\Service\Tools;
use Exception;

class Router
{
  public function run()
  {
    // delete trailing slash
    $uri = $_SERVER['REQUEST_URI'];
    //check if uri is not empty
    if (!empty($uri) && $uri != '/' && $uri[-1] === '/') {

      //delete /
      $uri = substr($uri, 0, -1);

      http_response_code(301);

      // redirect to uri
      Tools::redirect($uri);
    }
    $params = [];
    if (isset($_GET['p'])) {
      $params = explode('/', $_GET['p']);
    }

    if (!empty($params) && count($params) > 0) {

      $controller = '\\App\\Controller\\' . ucfirst(array_shift($params)) . 'Controller';  //Génère le nom de la classe à partir du nom du controller
      if (!class_exists($controller)) {
        http_response_code(404);
        //Redirection vers la 404 page
        Tools::redirect('/error/_404');
      }
      $controller = new $controller;
      // We retrieve the 2nd URL parameter
      $action = (isset($params[0])) ? array_shift($params) : 'index';

      if (method_exists($controller, $action)) {
        // If the rest of the parameters are passed to the method
        (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();
      } else {
        http_response_code(404);
        //Redirection vers la 404 page
        Tools::redirect('/error/_404');
      }
    } else {
      //no parameters
      //Instance controllerDefault
      $controller = new MainController;
      $controller->index();
    }
  }
}
