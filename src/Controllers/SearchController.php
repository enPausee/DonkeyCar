<?php

namespace App\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\Model;

class SearchController extends Controller
{
    public function index()
    {

        $model = new BrandModel;

        $brands = $model->findAll();

        $model = new CategoryModel;

        $categories = $model->findAll();

        $model = new Model;

        $models = $model->findAll();

        $this->render('search/index', compact('categories', 'brands', 'models'));

    }

    public function searchShow(int $id)
    {
        $brand = "";
        if (isset($_GET['valide'])) {
            var_dump($_GET['valide']);
            $model = new BrandModel;

            $brands = $model->findBy($_GET['brand']);

            $model = new CategoryModel;

            $categories = $model->findBy($_GET['category']);

            $model = new Model;

            $models = $model->findBy($_GET['model']);
            var_dump($categories);
            die;

        }

        $this->render('search/searchShow', compact('categories', 'brands', 'models'));
    }

}