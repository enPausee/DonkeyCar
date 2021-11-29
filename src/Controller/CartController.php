<?php

namespace App\Controller;

use App\Model\BrandModel;
use App\Model\VehicleModel;
use App\Controller\Controller;

class CartController extends Controller
{
  public function index()
  {
    $this->title .= ' - votre selection';
    $this->description = "Faite votre sélection de vehicule";
    $this->h1 = "Votre panier";

    $this->render('cart/index', []);
  }
}
