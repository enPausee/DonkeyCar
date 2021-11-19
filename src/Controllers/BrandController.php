<?php

namespace App\Controllers;

use App\Models\BrandModel;

class BrandController extends Controller
{
    public function index()
    {

        /**
         * table brand
         * findAll()    --> ok
         * find()       --> ok
         * findby()     -->ok
         * create()     -->ok
         * hydrate()     -->ok
         * update()     -->ok
         * delete()     -->ok
         */
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