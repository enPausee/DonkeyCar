<?php

namespace App\Controller;

abstract class Controller
{
    public function render(string $pathFile, array $datas = [], string $template = 'default')
    {
        //On extrait le contenue des $datas
        extract($datas);

        //On démarre le buffer de sortie
        ob_start(); //A partir de ce point toute sortie est conservée dans le buffer

        //On crée le chemin vers la vue
        require_once ROOT . '/src/View/' . $pathFile . '.php';

        //On récupère le contenue du buffer
        $content = ob_get_clean();

        // Template de page  
        require_once ROOT . '/src/View/' . $template . '.php';
    }
}
