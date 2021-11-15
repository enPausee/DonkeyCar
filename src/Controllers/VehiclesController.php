<?php 

namespace App\Controllers;

class VehiclesController extends Controller
{
    public function index()
    {
        $this->render('vehicles/index', []);
    }
}   