$(document).ready(function() {
    console.log(document.getElementById("dateTo").value);
    console.log($('#dateTo'));
    var $dateFrom = $('#dateFrom');
    var dateFromVal = $dateFrom.val();
    $dateFromDp = $dateFrom.daterangepicker({
        // autoUpdateInput: false,
        // requiredValue: false,
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $dateFrom.val(dateFromVal);
    $dateTo = $('#dateTo');
    var dateToVal = $dateTo.val();
    $dateTo.daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $dateTo.val(dateToVal);
    // $('#dateFrom').datepicker();
    // $('#dateTo').datepicker();
});