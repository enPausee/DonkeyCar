<?php

namespace App\Controller;

use App\Model\OrderModel;

class OrderController extends Controller
{
  public function print_order()
  {
    $this->title .= ' - Order';
    $this->description = "Liste de vos réservation";
    $this->h1 = "Vos réservations";
    $orderModel = new OrderModel();
    $orders = $orderModel->getAllProperties();
    $this->render('order/print_order', compact('orders'));
  }
}
