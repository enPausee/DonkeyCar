<?php

namespace App\Controller;

use App\Model\BrandModel;
use App\Model\CategoryModel;
use App\Model\Model;

class RechercheController extends Controller
{
    public function index()
    {

        $model = new BrandModel;

        $brands = $model->findAll();

        $model = new CategoryModel;

        $categories = $model->findAll();

        $model = new Model;

        $models = $model->findAll();

        $this->render('recherche/index', compact('categories', 'brands', 'models'));

    }

    public function show(int $id)
    {
        $brand = "";
        if ($id) {

            $model = new BrandModel;

            $brand = $model->find($id);

            $model = new CategoryModel;

            $category = $model->find($id);

            $model = new Model;

            $models = $model->find($id);

        }
        $this->render('recherche/demo', compact('categories', 'brands', 'models'));
    }

}