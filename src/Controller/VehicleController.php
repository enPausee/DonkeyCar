<?php

namespace App\Controller;

use App\Model\CategoryModel;
use App\Model\VehicleModel;

class VehicleController extends Controller
{
  public function index()
  {
    $this->title .= ' - vehicle';
    $this->description = "Liste des vehicules";
    $this->h1 = "Nos véhicules";

    $model = new VehicleModel;
    $vehicles = $model->getAllProperties();

    $modelCategory = new CategoryModel;
    $categories  = $modelCategory->findAll();

    $this->render('vehicle/index', compact('vehicles', 'categories'));
  }

  public function ajax()
  {
    // Accès depuis n'importe quel site ou appareil (*)
    header("Access-Control-Allow-Origin: *");

    // Format des données envoyées
    header("Content-Type: application/json; charset=UTF-8");

    // Méthode autorisée
    header("Access-Control-Allow-Methods: POST");

    // Durée de vie de la requête
    header("Access-Control-Max-Age: 3600");

    // Entêtes autorisées
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    http_response_code(200);
    if (!empty($_POST)) {
      echo json_encode(["message" => $_POST, "success" => true]);
    } else {
      echo json_encode(["message" => "", "success" => false]);
    }

  }
}
