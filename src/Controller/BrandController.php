<?php

namespace App\Controller;

use App\Model\BrandModel;

class BrandController extends Controller
{
    public function index()
    {
        $this->title .= ' - nos marques';        
        $this->description = "description des marques";
        $this->h1 = "Nos marques";
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
            $this->description = "description de". $brand->name;
            $this->title .= ' - '. $brand->name;
            $this->h1 = $brand->name;
        }

        $this->render('brand/show', compact('brand'));
    }
}
