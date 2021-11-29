<?php

namespace App\Controller;

use App\Model\OrderModel;

class OrderController extends Controller
{

    public function oldOrder()
    {
        $this->title .= ' - Ancienne réservation';
        $this->description = "Vos anciennes réservation";
        $this->h1 = "Vos anciennes réservations";
        $orderModel = new OrderModel();
        $orders = $orderModel->oldOrder();
        $this->render('order/oldOrder', compact('orders'));
    }

    public function pendingOrder()
    {
        $this->title .= ' - Réservation en cours';
        $this->description = "Liste de vos réservation en cours";
        $this->h1 = " Vos réservations en cours";
        $orderModel = new OrderModel();
        $orders = $orderModel->pendingOrder();
        $this->render('order/pendingOrder', compact('orders'));
    }

    public function orderToCome()
    {
        $this->title .= ' - Réservation à venir';
        $this->description = "Liste de vos réservation a venir";
        $this->h1 = " Vos réservations a venir";
        $orderModel = new OrderModel();
        $orders = $orderModel->orderToCome();
        $this->render('order/orderToCome', compact('orders'));
    }

    public function annulOrder()
    {
        $this->title .= ' - Annulation';
        $this->description = "Réservation annulée";
        $this->h1 = "Réservation annulée";
        $orderModel = new OrderModel();
        $annulOrders = $orderModel->deleteOrder($_POST['id']);
        $this->render('order/annulOrder', compact('annulOrders'));
    }
}