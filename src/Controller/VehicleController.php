<?php

namespace App\Controller;

use App\Model\VehicleModel;

class VehicleController extends Controller
{
    public function index()
    {
        $model = new VehicleModel;
        $vehicles = $model->getAllProperties();
        $this->render('vehicle/index', compact('vehicles'));
    }
}
