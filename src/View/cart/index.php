<?php

use App\Model\ExtraModel;
use App\Model\VehicleModel;

// var_dump(($_SESSION['cart']));

?>
<div class="page-cart">
  <div class="container">
    <h1><?= $this->h1 ?></h1>
    <div class="container">
      <table class="table table-responsive-md ">
        <thead>
          <tr>
            <th scope="col">Véhicule</th>
            <th scope="col">Prix Journalier</th>
            <th scope="col">Date start</th>
            <th scope="col">Date end</th>
            <th scope="col">Extra</th>
            <th scope="col">Prix total</th>
            <th scope="col">Prix total TTC</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($_SESSION['cart']['id'] as $vehicle_id) {
            $vehicle = (new VehicleModel)->getAllPropertiesById($vehicle_id);
            $price = 0;
          ?>
            <tr>
              <th scope="row">
                <div>
                  <img src="../../picture/vehicle/<?= $vehicle->image ?>" width="200" height="200" alt="vehicle's image">
                  <p><?= $vehicle->marque ?> <?= $vehicle->model ?></p>
                </div>
              </th>
              <td><?php
                  echo $vehicle->daily_price;
                  $price += $vehicle->daily_price;
                  ?> €</td>
              <td><?= $_SESSION['cart'][$vehicle_id]['start'] ?></td>
              <td><?= $_SESSION['cart'][$vehicle_id]['end'] ?></td>
              <td>
                <ul class="list-group">
                  <?php foreach ($_SESSION['cart'][$vehicle_id]['extras'] as $extraId) {
                    $extra = (new ExtraModel())->find($extraId);
                    $price += $extra->daily_price;

                  ?>
                    <li class="list-group-item"><?= $extra->name ?> (<?= $extra->daily_price ?>) €</li>
                  <?php } ?>
                </ul>
              </td>
              <td><?= $price ?></td>
              <td><?= $price * 1.2 ?></td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" style="text-align: right;font-weight:bold">
              TOTAL
            </td>
            <td>100€</td>
            <td>120€</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
