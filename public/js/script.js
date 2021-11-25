"use strict";

let inputDateDebut = document.querySelector(".flatpickr");
flatpickr(inputDateDebut, {
	mode: "range",
	minDate: "today",
	dateFormat: "Y-m-d",
	disable: [
		function (date) {
			// disable every multiple of 8
			return !(date.getDate() % 8);
		},
	],
});

/*let inputDateFin = document.querySelector(".flatpickr2");
flatpickr(inputDateFin, {
	minDate: "today",
	dateFormat: "Y-m-d",
	disable: [
		function (date) {
			// disable every multiple of 8
			return !(date.getDate() % 8);
		},
	],
});*/

/*function datecompare() {
	// Sélectionner l'élément input et récupérer sa valeur
	let valueDateDebut = inputDateDebut.value;
	console.log(valueDateDebut);
	let valueDateFin = inputDateFin.value;
	if (valueDateDebut > valueDateFin) {
		alert("vous devez donnez une autre date de fin");
	}
}*/
flatpickr({
	plugins: [new rangePlugin({ input: "#secondRangeInput" })],
});
