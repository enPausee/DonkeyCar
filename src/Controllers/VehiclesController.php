<?php 

namespace App\Controllers;

class VehiclesController extends Controller
{
    public function index()
    {
        include_once ROOT.'/src/Views/vehicles/index.php';
    }
}   