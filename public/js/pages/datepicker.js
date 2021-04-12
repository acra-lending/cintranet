$(function() {
    $('#requestDate').daterangepicker({
        singleDatePicker: true,
    });
    $('#dateRange').daterangepicker();
})

$(function() {
    $('#requestDate2').daterangepicker({
        singleDatePicker: true,
    });
    $('#dateRange2').daterangepicker();
})

$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

});