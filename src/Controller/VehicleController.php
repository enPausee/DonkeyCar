<?php

namespace App\Controller;

use App\Model\CategoryModel;
use App\Model\VehicleModel;

class VehicleController extends Controller
{
  public function index()
  {
    $model = new VehicleModel;
    $vehicles = $model->getAllProperties();

    $modelCategory = new CategoryModel;
    $categories  = $modelCategory->findAll();
    $this->render('vehicle/index', compact('vehicles', 'categories'));
  }
}
