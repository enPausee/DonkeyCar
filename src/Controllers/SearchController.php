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

    public function searchShow()
    {
        $brand = "";
        if (!empty($_GET['valide'])) {
            var_dump($_GET['valide']);
            $model = new BrandModel;

            $brands = $model->find();

            $model = new CategoryModel;

            $categories = $model->find();

            $model = new Model;

            $models = $model->find();
            var_dump($categories);
            die;

        }

        $this->render('search/searchShow', compact('categories', 'brands', 'models'));
    }

}