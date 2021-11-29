<?php

namespace App\Controller;

use App\Model\BrandModel;
use App\Model\CategoryModel;
use App\Model\Model;
use App\Model\VehicleModel;
use App\Service\DataBase;
use PDOException;

class VehicleController extends Controller
{
    public function index()
    {
        $this->title .= ' - vehicle';
        $this->description = "Liste des vehicules";
        $this->h1 = "Nos véhicules";

        $modelVehicle = new VehicleModel;
        $vehicles = $modelVehicle->getAllProperties();

        $modelCategory = new CategoryModel;
        $categories = $modelCategory->findAll();

        $min_daily_price = DataBase::getMinDaily_Price();
        $max_daily_price = DataBase::getMaxDaily_Price();

        $modelBrand = new BrandModel;
        $brands = $modelBrand->findall();

        $model = new Model;
        $models = $model->findAll();

        $this->render('vehicle/index', compact('vehicles', 'categories', 'min_daily_price', 'max_daily_price', 'brands', 'models'));
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

        $vehicles = [];

        if (!empty($_POST)) {
            try {
                if (!isset($_POST['category_list']) || (isset($_POST['category_list']) && count($_POST['category_list']) == 0)) {
                    $arrayCategory = [];
                } else {
                    $arrayCategory = $_POST['category_list'];
                }
                $vehicles = DataBase::searchVehicle($arrayCategory, $_POST['daily_price'], $_POST['brand'], $_POST['model']);
                http_response_code(200);
            } catch (PDOException $e) {
                die(var_dump($e->getMessage()));
            }

            echo json_encode(["post" => $_POST, "vehicles" => $vehicles, "success" => true]);
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Un probleme est survenu", "success" => false]);
        }
    }
    public function admin()
    {
        $this->title .= ' - vehicle';
        $this->description = "Gestion des vehicules";
        $this->h1 = "Gestion de vos véhicules";

        $modelVehicle = new VehicleModel;
        $vehicles = $modelVehicle->getAllProperties();

        $modelCategory = new CategoryModel;
        $categories = $modelCategory->findAll();

        $min_daily_price = DataBase::getMinDaily_Price();
        $max_daily_price = DataBase::getMaxDaily_Price();

        $modelBrand = new BrandModel;
        $brands = $modelBrand->findall();

        $model = new Model;
        $models = $model->findAll();

        $this->render('vehicle/admin', compact('vehicles', 'categories', 'min_daily_price', 'max_daily_price', 'brands', 'models'));
    }
}