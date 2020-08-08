$(function() {
    $('#requestDate').daterangepicker({
        singleDatePicker: true,
    });
    $('#dateRange').daterangepicker();
})

$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

});