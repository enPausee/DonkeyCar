<?php

namespace App\Controller;

class VehiclesController extends Controller
{
    public function index()
    {
        $this->render('vehicles/index', []);
    }
}
