<?php

namespace App\Controller;

use App\Model\BrandModel;

class MainController extends Controller
{
    public function index()
    {

        $this->render('main/index', []);
    }
}
