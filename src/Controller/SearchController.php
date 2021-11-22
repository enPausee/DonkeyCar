<?php

namespace App\Controller;

use App\Model\BrandModel;
use App\Model\CategoryModel;
use App\Model\Model;

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

            $brands = $model->find($_GET['id']);

            $model = new CategoryModel;

            $categories = $model->find($_GET['id']);

            $model = new Model;

            $models = $model->find($_GET['id']);
            var_dump($categories);
            die;

        }

        $this->render('search/searchShow', compact('categories', 'brands', 'models'));
    }

}