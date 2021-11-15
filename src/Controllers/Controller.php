<?php 
namespace App\Controllers;

abstract class Controller{
    public function render(string $pathFile, array $datas=[])
    {
        extract($datas);

        require_once ROOT.'/src/Views/'.$pathFile.'.php';
    }
}