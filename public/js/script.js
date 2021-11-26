$(document).ready(function () {
  var fromDate;
  $("#fromDate").on("change", function (event) {
    fromDate = $(this).val();
    console.log(fromDate);
    console.log(this.val);
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
});
