/*
let categories = document.querySelectorAll('.type input[type="checkbox"]');
console.log(categories);
*/
"use strict";

window.onload = () => {
  console.log("javascript : ok");
  ajaxTraitement();
};

const ajaxTraitement = () => {
  const bntApply = document.getElementById("js-apply");
  bntApply.addEventListener("click", function (e) {
    e.preventDefault();

    const form = document.getElementById("js-form");
    //console.log(form);
    const data = new FormData(form);

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr.response);
      } else if (xhr.readyState == 4) {
        alert("Une erreur est survenue");
      }
    };

    xhr.open("POST", "/vehicle/ajax", true);
    xhr.send(data);
    return false;
  });
};
