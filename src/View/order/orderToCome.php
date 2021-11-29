<h1><?=$this->h1?></h1>
<style>
th,
td {
    text-align: center;
}

td {
    vertical-align: middle;
}
</style>
<a href="/order/oldOrder" class="btn btn-info" style="margin-top: 10px;">Voir vos anciennes locations</a>

<a href="/order/pendingOrder" class="btn btn-secondary" style="margin-top: 10px;">Voir vos locations en cours</a>
<?php if (empty($orders)): ?>
<p>Vous n'avez aucune réservation en cours.</p>
<?php else: ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">numéro de réservation</th>
            <th scope="col">Date de réservation</th>
            <th scope="col">Nom du véhicule</th>
            <th scope="col">Date de début</th>
            <th scope="col">Date de fin</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Prix</th>
            <th scope="col">annulation</th>
        </tr>
    </thead>
    <tbody>
        <?php

foreach ($orders as $order):

?>
        <tr>
            <th scope="row">
                <img src="../picture/vehicle/<?php echo $order->image; ?>" width="200px" height="150px"></img>
            </th>
            <td><?php echo $order->id ?></td>
            <td><?php echo $order->created_at ?></td>
            <td><?php echo $order->marque . " " . $order->model ?></td>
            <td><?php echo $order->start_location ?></td>
            <td><?php echo $order->end_location ?></td>
            <td><?php echo $order->category ?></td>
            <td><?php echo $order->price ?>€</td>
            <td>
                <form action="annulOrder" method="post">
                    <input type="text" name="id" value="<?php echo $order->id ?>" hidden>
                    <button type="submit" name="annul" value="oui" class="btn btn-danger">annulation</button>
                </form>
            </td>
        </tr>
        <?php endforeach;?>
        <?php endif?>
    </tbody>
</table>