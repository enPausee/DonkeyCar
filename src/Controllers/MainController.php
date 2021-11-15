<?php 

namespace App\Controllers;

class MainController extends Controller
{
    public function index()
    {
        include_once ROOT.'/src/Views/main/index.php';
    }
}