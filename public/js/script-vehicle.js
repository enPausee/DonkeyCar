"use strict";

window.onload = () => {
  console.log("javascript : ok");

  //show current value of daily_price
  showVal(document.getElementById("daily_price").value);

  // send & return response from server
  ajaxTraitement();
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
          //console.log(json.post);
          const vehicles = json.vehicles;
          const template = merge(vehicles);
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
const merge = (vehicles) => {
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
  <div class="description">${vehicle.marque} ${vehicle.model}</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal${vehicle.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
