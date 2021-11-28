<?php

namespace App\Controller;

use App\Model\CategoryModel;

class CategoryController extends Controller
{
  public function index()
  {
    $model = new CategoryModel;

    $categories = $model->findAll();

    $this->description = "description des catégories";
    $this->title .= ' -  catégories';
    $this->h1 = 'Nos catégories';
    $this->render('category/index', compact('categories'));
  }
}
