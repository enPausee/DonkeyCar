<?php

namespace App\Controller;

use App\Service\Validator;
use App\Model\MainModel;

class MainController extends Controller
{
  public function index()
  {
    $this->render('main/index');
  }
}
