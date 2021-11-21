<div>
    <label for="category">Choissisez votre catégorie de véhicule</label>
    <select>
        <?php foreach ($categories as $category): ?>
        <option>
            <?=$category->name?>
        </option>
        <?php endforeach?>
    </select>
</div>
<br>
<div>
    <label for="brand">Choissisez votre marque de véhicule</label>
    <select>
        <?php foreach ($brands as $brand): ?>
        <option><?=$brand->id?><?=$brand->name?></option>
        <?php endforeach?>
    </select>
</div>
<br>
<div>
    <label for="model">Choissisez votre modéle de véhicule</label>
    <select>
        <?php foreach ($models as $model): ?>
        <option>
            <?=$model->name?>
        </option>
        <?php endforeach?>
    </select>
</div>
<br>
<div>
    <label for="date debut">Sélectionnez votre date de début de location</label>
    <input type="date" name="date début">
</div>
<br>
<div>
    <label for="date fin">Sélectionnez votre date de fin de location</label>
    <input type="date" name="date fin">
</div>