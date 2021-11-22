<?php

namespace App\Controller;

use App\Model\Model;

class ModelController extends Controller
{
    public function index()
    {
        $model = new Model;

        $models = $model->findAll();

        $this->render('model/index', compact('models'));
    }
}
