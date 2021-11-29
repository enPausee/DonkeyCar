<?php

namespace App\Controller;


use App\Controller\Controller;
use App\Model\OrderModel;
use App\Model\UserModel;
use App\Model\VehicleModel;
use App\Service\Cart;
use App\Service\Tools;
use App\Service\Validator;

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
        $toDate = Validator::test_input($_POST['toDate']);

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

  public function validation()
  {

    $model = new VehicleModel;
    $idVehicle = $_SESSION['cart']['id'][0];
    $vehicle = $model->find($idVehicle);
    $vehicle->is_available = 0;
    $model->update($idVehicle, $vehicle);

    $start = $_SESSION['cart'][$idVehicle]['start'];
    $end = $_SESSION['cart'][$idVehicle]['end'];

    $order = new OrderModel;
    $order->setStartLocation($_SESSION['cart'][$idVehicle]['start']);
    $order->setEndLocation($_SESSION['cart'][$idVehicle]['end']);
    $total = 0;
    foreach ($_SESSION['cart'][$idVehicle]['extras'] as $price) {
      $total += $price;
    }
    $order->setPrice($total);
    $order->create();
    Tools::set_flash("Votre commande a été validée", 'success');

    //Redirection vers la home page
    Tools::redirect('order/orderToCome');
  }
}
