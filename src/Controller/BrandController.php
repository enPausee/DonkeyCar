<?php

namespace App\Controller;

use App\Model\BrandModel;

class BrandController extends Controller
{
    public function index()
    {
        $model = new BrandModel;

        $brands = $model->findAll();

        $this->render('brand/index', compact('brands'));
    }

    public function show(int $id)
    {
        $brand = "";
        if ($id) {
            $model = new BrandModel;
            $brand = $model->find($id);
        }
        $this->render('brand/show', compact('brand'));
    }
}
