<?php

namespace App\Controller;

use App\Model\OrderModel;
use App\Service\Tools;

class OrderController extends Controller
{

    public function oldOrder()
    {
        $this->title .= ' - Ancienne locations';
        $this->description = "Vos anciennes locations";
        $this->h1 = "Vos anciennes locations";
        $orderModel = new OrderModel();
        $orders = $orderModel->oldOrder();
        $this->render('order/oldOrder', compact('orders'));
    }

    public function pendingOrder()
    {
        $this->title .= ' - Location en cours';
        $this->description = "Liste de vos location en cours";
        $this->h1 = " Vos locations en cours";
        $orderModel = new OrderModel();
        $orders = $orderModel->pendingOrder();
        $this->render('order/pendingOrder', compact('orders'));
    }

    public function orderToCome()
    {
        $this->title .= ' -Location à venir';
        $this->description = "Liste de vos location à venir";
        $this->h1 = " Vos locations à venir";
        $orderModel = new OrderModel();
        $orders = $orderModel->orderToCome();
        $this->render('order/orderToCome', compact('orders'));
    }

    public function annulOrder()
    {
        $this->title .= ' -Annulation';
        $this->description = "Annulation de location";
        $this->h1 = "Location annulée";
        $orderModel = new OrderModel();
        $annulOrders = $orderModel->deleteOrder($_POST['id']);
        if ($annulOrders) {
            Tools::set_flash("La location a été annulée", 'success');

            //Redirection vers la home page
            Tools::redirect('/order/orderToCome');
            $this->render('order/annulOrder', compact('annulOrders'));
        }
    }}