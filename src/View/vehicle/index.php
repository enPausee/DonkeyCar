<div class="list-vehicle">
  <div class="container">
    <h1>Liste des vehicules</h1>
    <div class="row">
      <div class="col-md-3">
        <div class="filters">
          <div class="type">
            <p>Catégories</p>
            <div class="row">
              <?php foreach ($categories as $category) : ?>
                <div class="col-md-6 category">
                  <a href="#"><?= strtolower($category->name)  ?></a>
                </div>
              <?php endforeach; ?>
            </div>
            <hr>
            <div class="price">
              <label for="customRange1" class="form-label">Prix journalier</label>
              <input type="range" class="form-range" id="customRange1">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="container">
          <div class="row ">
            <?php foreach ($vehicles as $vehicle) : ?>
              <div class="col-md-5 vehicle">
                <div class="image">
                  <img class="image-fluid" src="./picture/vehicle/<?= $vehicle->image ?>" width="200" height="200" alt="image'<?= $vehicle->model ?>">
                </div>
                <div class="daily_price">
                  <?= $vehicle->daily_price ?><span> €</span>
                </div>
                <div class="description">
                  <?= $vehicle->marque . ' ' . $vehicle->model ?>
                </div>
              </div>
            <?php endforeach;  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
