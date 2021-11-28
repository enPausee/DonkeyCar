<?php

namespace App\Controller;

use App\Service\Validator;

class MainController extends Controller
{
  public function index()
  {
    $this->render('main/index', []);
  }
}
