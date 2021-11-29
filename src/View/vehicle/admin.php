<div class="container">
    <h1><?=$this->h1?></h1>
    <form action="/vehicle/addVehicle" method="post">
        <label for="category" class="form-label">Catégorie du vehicle</label>
        <select name="category" id="category" class="form-select">
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?>
            </option>
            <?php endforeach;?>
        </select>
        <br>
        <label for="brand" class="form-label">Marque du vehicle</label>
        <select name="brand" id="brand" class="form-select">
            <?php foreach ($brands as $brand): ?>
            <option value="<?php echo $brand->id; ?>"><?php echo $brand->name; ?>
            </option>
            <?php endforeach;?>
        </select>
        <br>
        <label for="model" class="form-label">modéle du vehicle</label>
        <select name="model" id="model" class="form-select">
            <?php foreach ($models as $model): ?>
            <option value="<?php echo $model->id; ?>"><?php echo $model->name; ?>
            </option>
            <?php endforeach;?>
        </select>
    </form>
</div>