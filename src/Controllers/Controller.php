<?php 
namespace App\Controllers;

abstract class Controller{
    public function render(string $pathFile, array $datas=[], string $template = 'default')
    {
        extract($datas);

        ob_start();
        require_once ROOT.'/src/Views/'.$pathFile.'.php';
        $content = ob_get_clean();
        require_once ROOT.'/src/Views/'.$template.'.php';
    }
}