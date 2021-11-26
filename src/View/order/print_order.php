<h1><?= $this->h1 ?></h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Date de réservation</th>
      <th scope="col">Nom du véhicule</th>
      <th scope="col">Date de début</th>
      <th scope="col">Date de fin</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody class>
    <?php
    if (count($orders) !== 0) :
      foreach ($orders as $order) : ?>
        <tr>
          <th scope="row">
            <img src="../picture/vehicle/<?php echo $order->image; ?>" width="200px" height="150px"></img>
          </th>
          <td><?php echo $order->created_at?></td>
          <td><?php echo $order->marque . $order->model?></td>
          <td><?php echo $order->start_location?></td>
          <td><?php echo $order->end_location?></td>
          <td><?php echo $order->category?></td>
          <td><?php echo $order->price?>€</td>
        </tr>
      <?php endforeach;
    else : ?>
      <tr>
        <td colspand="6">Vous n'avez pas de réservation</td>
      </tr>
    <?php endif ?>
  </tbody>
</table>
