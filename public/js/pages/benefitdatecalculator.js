$(function() {
    $('#effectiveDate').daterangepicker({
        singleDatePicker: true,
    });
})

const calcDate = () => {
    const date = new Date(document.getElementById('effectiveDate').value);
    date.setDate(date.getDate()+60);
    document.getElementById('calculatedDate').value = date.toLocaleDateString('en-US');
};

$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 5 secs

});