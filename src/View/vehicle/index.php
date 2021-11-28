<div class="list-vehicle">
  <div class="container">
    <h1><?= $this->h1 ?></h1>
    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="filters">
          <form id="js-form">
            <div class="type">
              <div class="container">
                <p>Catégories</p>
                <div class="row">
                  <div class="form-check">
                    <?php foreach ($categories as $category) : ?>
                      <div class="col">
                        <input class="form-check-input" type="checkbox" value="<?= $category->id ?>" name="category_list[]" id="category-<?= $category->id ?>" checked>
                        <label class="form-check-label" for="category-<?= $category->id ?>">
                          <?= strtolower($category->name) ?>
                        </label>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="price">
              <div class="container">
                <label for="daily_price" class="form-label">Prix journalier</label>
                <div class="container_daily_price">
                  <span class="min_daily_price"><?= $min_daily_price ?></span>
                  <input type="range" class="form-range" min="<?= $min_daily_price ?>" max="<?= $max_daily_price ?>" name="daily_price" id="daily_price">
                  <span class="max_daily_price"><?= $max_daily_price ?></span>
                </div>
              </div>
            </div>
            <hr>
            <div class="container">
              <p>Marques</p>
              <select class="form-select" name="brand" id="js-brand" aria-label="marques">
                <option value="0" selected>Toutes les marques</option>
                <?php foreach ($brands as $brand) : ?>
                  <option value="<?= $brand->id ?>"><?= $brand->name ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <hr>
            <div class="gearBox">
              <div class="container">
                <p>Modèles</p>
                <select class="form-select" name="model" id="js-model" aria-label="modèle">
                  <option value="0" selected>Tous les models</option>
                  <?php foreach ($models as $model) : ?>
                    <option value="<?= $model->id ?>"><?= $model->name ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <hr>
            <div class="text-center my-3">
              <input type="submit" id="js-apply" class="btn btn-secondary" value="Appliquer" />
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-9">
        <div class="container">
          <div class="row" id="js-vehicle">
            <?php
            $cpt = 1;
            $offset = "offset-md-2";
            foreach ($vehicles as $vehicle) : ?>
              <div class="vehicle col-md-5 <?= ($cpt % 2 == 0) ? $offset : ""; ?>">
                <a class="image" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $vehicle->id ?>">
                  <img class="image-fluid" src="./picture/vehicle/<?= $vehicle->image ?>" width="200" height="200" alt="image'<?= $vehicle->model ?>">
                </a>
                <div class="daily_price">
                  <?= $vehicle->daily_price ?><span> €</span>
                </div>
                <div class="description">
                  <?= $vehicle->marque . ' ' . $vehicle->model ?>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $vehicle->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?= $vehicle->marque . ' ' . $vehicle->model ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="container">
                          <img class="image-fluid" src="./picture/vehicle/<?= $vehicle->image ?>" width="400" height="400" alt="image'<?= $vehicle->model ?>">
                          <ul class="list-group">
                            <li class="list-group-item">Marque: <?= $vehicle->marque ?></li>
                            <li class="list-group-item">Model: <?= $vehicle->model ?></li>
                            <li class="list-group-item">Catégorie: <?= $vehicle->category ?></li>
                            <li class="list-group-item">Prix journalier: <?= $vehicle->daily_price ?> €</li>
                          </ul>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
              $cpt++;
            endforeach;  ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/script-vehicle.js"></script>
