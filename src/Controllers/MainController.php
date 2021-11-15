<?php 

namespace App\Controllers;

use App\Models\BrandModel;

class MainController extends Controller
{
    public function index()
    {

        $this->render('main/index', []);
    }
}