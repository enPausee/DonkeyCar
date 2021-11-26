<?php

namespace App\Controller;

use App\Model\Model;

class ModelController extends Controller
{
  public function index()
  {
    $model = new Model;

    $models = $model->findAll();

        $this->description = "description des modèles";
        $this->title .= ' -  modèles';
        $this->h1 = 'Nos modèles';

        $this->render('model/index', compact('models'));
    }
}

