
$(function() {
    $('#requestDate').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
    });
    $('#dateRange').daterangepicker();
})

$(function() {
    $('.datepicker').daterangepicker({
        singleDatePicker: true,
        startDate: moment().startOf('minute').add(-8, 'hour'),
        timePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'M/DD hh:mm A'
          }
    });
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