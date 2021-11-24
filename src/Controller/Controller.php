<?php

namespace App\Controller;

abstract class Controller
{
    protected $title = "Donkey-Car";
    protected $description = "Réservation de voiture aux meilleurs prix";
    protected $h1 = "Donkey-Car";

    public function render(string $view, array $datas = [], string $layout = 'layout/default')
    {
        //On extrait le contenue des $datas
        extract($datas);

        //On démarre le buffer de sortie
        ob_start(); //A partir de ce point toute sortie est conservée dans le buffer

        //On crée le chemin vers la view
        require_once ROOT . '/src/View/' . $view . '.php';

        //On récupère le contenue du buffer
        $content = ob_get_clean();

        // Layout de page  
        require_once ROOT . '/src/View/' . $layout . '.php';
    }
}
