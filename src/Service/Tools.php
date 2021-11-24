<?php

namespace App\Service;

class Tools
{
    public static function set_flash($message, $type = 'info')
    {
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;
    }

    public static function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }

    public static function setActive(string $path)
    {
        $uri = $_SERVER['REQUEST_URI'];
        if (isset($_GET['p'])) {
            $params = explode('/', $_GET['p']);
        }
        if ($params==null && $path == '/') {
            return "active";
        }
        if(!empty($params)) {
            if( count($params)==1) {
                return ($params[0]==$path)? "active":"";
            } elseif (count($params)==2) {
                return ("/".$params[0]."/".$params[1]==$path)? "active":"";
            }
        }
    }
}
