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
}
