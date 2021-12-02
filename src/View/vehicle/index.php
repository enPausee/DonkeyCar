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
                <label for="daily_price" class="form-label">Prix journalier max (<span id="js-current-daily-price">0</span> €)</label>
                <div class="container_daily_price">
                  <span class="min_daily_price"><?= $min_daily_price ?></span>
                  <input type="range" class="form-range" min="<?= $min_daily_price ?>" max="<?= $max_daily_price ?>" name="daily_price" id="daily_price" oninput="showVal(this.value)" onchange="showVal(this.value)">
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
            <div>
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
            <input type="hidden" name="user_connect" value="<?php echo isset($_SESSION['user']['id']) ? "connected" : "notConnected";  ?>">
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
                <?php if (isset($_SESSION['user']['id'])) : ?>
                  <div class="cart">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalCart<?= $vehicle->id ?>"><i class="fas fa-cart-plus"></i></a>
                  </div>
                <?php endif; ?>
                <!-- Modal vehicle-->
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
                <!-- Modal for Cart-->
                <div>
                  <div class="modal fade" id="modalCart<?= $vehicle->id ?>" tabindex="-1" aria-labelledby="modalLabelCart" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="cart" method="POST">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalLabelCart">Tunnel d'achat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body ">
                            <div class="container">
                              <div class="card">
                                <div class="container">
                                  <div class="row">
                                    <img class="image-fluid" src="./picture/vehicle/<?= $vehicle->image ?>" alt="image'<?= $vehicle->model ?>">
                                    <input type="hidden" name="vehicle_id" value="<?= $vehicle->id ?>">
                                  </div>
                                  <hr>
                                </div>
                                <div class="card-body">
                                  <div class="containerDatepickerVehicle">
                                    <input type="date" id="js-fromDate<?= $vehicle->id ?>" name="fromDate">
                                    <input type="date" id="js-toDate<?= $vehicle->id ?>" name="toDate">
                                  </div>
                                  <hr>
                                  <h6>Extras</h6>
                                  <div class="container">
                                    <div class="row">
                                      <div class="form-check">
                                        <?php foreach ($extras as $extra) : ?>
                                          <div class="col">
                                            <input class="form-check-input" type="checkbox" value="<?= $extra->id ?>" name="extra_list[]" id="extra-<?= $extra->id ?>">
                                            <label class="form-check-label" for="extra-<?= $extra->id ?>">
                                              <?= strtolower($extra->name) ?>(<?= $extra->daily_price ?> €)
                                            </label>
                                          </div>
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" name="submit" class="btn btn-primary">Je réserve</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- JS for ModalCart Datepicker-->
                <script>
                  let debut<?= $vehicle->id ?> = document.getElementById("js-fromDate<?= $vehicle->id ?>");
                  let fin<?= $vehicle->id ?> = document.getElementById("js-toDate<?= $vehicle->id ?>");
                  debut<?= $vehicle->id ?>.addEventListener("change", (e) => {
                    //if debut value is lower than the current date value give an alert saying that the date is not valid
                    if (new Date(debut<?= $vehicle->id ?>.value) < new Date()) {
                      alert("La date de début doit être supérieure à la date d'aujourd'hui");
                      //reset the value of the date
                      debut<?= $vehicle->id ?>.value = "";
                    }
                    fin<?= $vehicle->id ?>.min = e.target.value;
                  });
                  fin<?= $vehicle->id ?>.addEventListener("change", (e) => {
                    debut<?= $vehicle->id ?>.max = e.target.value;
                  });
                </script>
              </div>
            <?php
              $cpt++;
            endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
