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
    if (!empty($_POST['valide'])) {

      $model = new BrandModel;

      $brands = $model->find($_POST['brand']);

      $model = new CategoryModel;

      $categories = $model->find($_POST['category']);

      $model = new Model;

      $models = $model->find($_POST['model']);
    }

    $this->render('search/searchShow', compact('categories', 'brands', 'models'));
  }
}
