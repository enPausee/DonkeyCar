<?php

namespace App\Controller;


use App\Controller\Controller;
use App\Service\Cart;
use App\Service\Tools;
use App\Service\Validator;
use Exception;

class CartController extends Controller
{
  public function index()
  {
    $this->title .= ' - votre selection';
    $this->description = "Faite votre sélection de vehicule";
    $this->h1 = "Votre panier";


    if (isset($_POST['submit'])) {
      if ($_POST['fromDate'] === '' && $_POST['toDate'] === '') {
        Tools::set_flash('Merci de préciser les dates de début et de fin pour la réservation', 'danger');
        Tools::redirect('/vehicle');
      } else {
        $vehicle_id = Validator::test_input($_POST['vehicle_id']);
        $fromDate = Validator::test_input($_POST['fromDate']);
        $toDate = Validator::test_input($_POST['fromDate']);

        $cart = new Cart;

        $cart->addDatesVehicle($vehicle_id, $fromDate, $toDate);

        if (isset($_POST['extra_list']) && count($_POST['extra_list'])) {
          foreach ($_POST['extra_list'] as $extra) {
            $cart->addExtra($vehicle_id, $extra);
          }
        }
      }
    }


    $this->render('cart/index', []);
  }
}
