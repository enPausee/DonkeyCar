<h1>Liste des vehicules</h1>
<style>
th,
td {
    text-align: center;
}

td {
    vertical-align: middle;
}
</style>
<table class="table">
    <tbody>
        <tr>
            <th>Image</th>
            <th>Marque</th>
            <th>Model</th>
            <th>Category</th>
            <th>Années de permis nécéssaire</th>
            <th>Tarif Journalier</th>
        </tr>
    </tbody>
    <tbody>
        <?php foreach ($vehicles as $vehicle): ?>
        <tr>
            <td><img src="./picture/vehicle/<?=$vehicle->image?>" width="150" height="150"
                    alt="image'<?=$vehicle->model?>"></td>
            <td><?=$vehicle->marque?></td>
            <td><?=$vehicle->model?></td>
            <td><?=$vehicle->category?></td>
            <td><?=$vehicle->year_driver_license_needed?></td>
            <td><?=$vehicle->daily_price?>€</td>
        </tr>
        <?php endforeach?>
    </tbody>
    <tfoot></tfoot>
</table>

<br>
<br>
<br>
<br>