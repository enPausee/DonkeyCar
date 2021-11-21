<select>
    <?php foreach ($brands as $brand): ?>
    <option><?=$brand->id?><?=$brand->name?></option>
    <?php endforeach?>
</select>
<select>
    <?php foreach ($categories as $category): ?>
    <option>
        <?=$category->name?>
    </option>
    <?php endforeach?>
</select>

<select>
    <?php foreach ($models as $model): ?>
    <option>
        <?=$model->name?>
    </option>
    <?php endforeach?>
</select>

<p>dsgddhd</p>