<?php

namespace App\Service;

class Cart
{
  public function __construct()
  {
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }
  }

  public function addDatesVehicle($vehicle_id, string $dateStart, string $dateEnd)
  {
    $_SESSION['cart']['id'][] = $vehicle_id;
    $_SESSION['cart']['id'][$vehicle_id]['date']['start'] = $dateStart;
    $_SESSION['cart']['id'][$vehicle_id]['date']['end'] = $dateEnd;
  }

  public function addExtra($vehicle_id, $extra_id)
  {
    $_SESSION['cart']['id'][$vehicle_id]['extras'][] = $extra_id;
  }
}
