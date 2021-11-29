window.onload = () => {
  const debut = document.getElementById("fromDate");
  const fin = document.getElementById("toDate");
  if (debut && fin) {
    //console.log("debut:", debut);
    //console.log("fin:", fin);

    debut.addEventListener("change", (e) => {
      fin.setAttribute("min", debut.value);
    });
    fin.addEventListener("change", (e) => {
      debut.setAttribute("max", fin.value);
    });
  }
};
