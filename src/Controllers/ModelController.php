<?php 

namespace App\Controllers;

use App\Models\Model;

class ModelController extends Controller
{
    public function index()
    {
        $model = new Model;
     
        $models = $model->findAll();

        $this->render('model/index', compact('models'));
    }
}