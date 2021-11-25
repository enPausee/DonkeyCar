"use strict";

var fromDate;
$("#fromDate").on("change", function (event) {
	fromDate = $(this).val();
	$("#toDate").prop("min", function () {
		return fromDate;
	});
});
var toDate;
$("#toDate").on("change", function (event) {
	toDate = $(this).val();
	$("#fromDate").prop("max", function () {
		return fromDate;
	});
});

function getValue() {
	// Sélectionner l'élément input et récupérer sa valeur
	let valueDateDebut = inputDateDebut.value;
	let valueDateFin = inputDateFin.value;

	if (valueDateDebut > valueDateFin) {
		alert(
			"votre date de fin " +
				valueDateFin +
				" est antérieure à votre date de début " +
				valueDateDebut,
		);
		return false;
	} else {
		alert("votre location est bonne");
		return true;
	}
}
