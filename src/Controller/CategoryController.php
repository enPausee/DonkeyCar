<?php

namespace App\Controller;

use App\Model\CategoryModel;

class CategoryController extends Controller
{
    public function index()
    {
        $model = new CategoryModel;

        $categories = $model->findAll();

        $this->render('category/index', compact('categories'));
    }
}
