<?php

namespace App\Controller;

use App\Model\OrderModel;

class OrderController extends Controller
{
  public function print_order()
  {
    $orderModel = new OrderModel();
    $orders = $orderModel->getAllProperties();
    $this->render('order/print_order', compact('orders'));
  }
}
