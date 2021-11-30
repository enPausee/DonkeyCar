"use strict";

window.onload = () => {
  console.log("javascript : ok");
  // get url for check
  let hrefCurrent = window.location.href;
  const words = hrefCurrent.split('/');
  const size = words.length;

  //only for vehicle-list
  if(words[size-1] && words[size-1]=='vehicle') {
    //show current value of daily_price
    showVal(document.getElementById("daily_price").value);

    // send & return response from server
    ajaxTraitement();
  }
};

const ajaxTraitement = () => {
  const bntApply = document.getElementById("js-apply");
  bntApply.addEventListener("click", function (e) {
    e.preventDefault();

    const form = document.getElementById("js-form");
    const data = new FormData(form);

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4 && xhr.status == 200) {
        if (xhr.response) {
          const json = JSON.parse(xhr.response);
          console.log(json.post.user_connect);
          const vehicles = json.vehicles;
          const template = merge(vehicles,json.post.user_connect);
          showTempate(template);
        } else {
          console.log("Une erreur est survenue", xhr.response.message);
        }
      } else if (xhr.readyState == 4) {
        alert("Une erreur est survenue");
      }
    };

    xhr.open("POST", "/vehicle/ajax", true);
    xhr.send(data);
    return false;
  });
};

// merge template and object vehicles
const merge = (vehicles,userConnected) => {
  let template = "";
  let cptVehicles = 1;

  if (vehicles.length) {
    vehicles.map((vehicle) => {
      if (cptVehicles % 2 == 0) {
        template += '<div class="vehicle col-md-5 offset-md-2">';
      } else {
        template += '<div class="vehicle col-md-5">';
      }
      template += `<a class="image" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal${vehicle.id}">
    <img class="image-fluid" src="./picture/vehicle/${vehicle.image}" width="200" height="200" alt="image'307" />
  </a>
  <div class="daily_price">${vehicle.daily_price}<span> €</span></div>
  <div class="description">${vehicle.marque} ${vehicle.model}</div>`;
  if (userConnected==1) {
    template += `<div class="cart"><a href="#" data-bs-toggle="modal" data-bs-target="#modalCart${vehicle.id}"><i class="fas fa-cart-plus"></i></a></div>`;
  }

  template += `<div class="modal fade" id="exampleModal${vehicle.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" class="modalLabel">
            ${vehicle.marque} ${vehicle.model}
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <img class="image-fluid" src="./picture/vehicle/${vehicle.image}" width="400" height="400" alt="image'${vehicle.marque} ${vehicle.model}" />
            <ul class="list-group">
              <li class="list-group-item">Marque: ${vehicle.marque}</li>
              <li class="list-group-item">Model: ${vehicle.model}</li>
              <li class="list-group-item">
                Catégorie: ${vehicle.category}
              </li>
              <li class="list-group-item">
                Prix journalier: ${vehicle.daily_price} €
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
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
                </div>`;
      cptVehicles++;
    });
  }
  return template;
};

// Update UI
const showTempate = (template) => {
  const partsToChange = document.getElementById("js-vehicle");
  partsToChange.innerHTML = template;
};

//show current value of daily_price
const showVal = (value) => {
  let current_daily_price = document.getElementById("js-current-daily-price");
  current_daily_price.innerHTML = value;
};
