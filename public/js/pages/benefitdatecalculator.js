$(function() {
    $('#effectiveDate').daterangepicker({
        singleDatePicker: true,
    });
})

const calcDate = () => {
    const date = new Date(document.getElementById('effectiveDate').value);
    const effectiveMonth = new Date(date.setDate(date.getDate()+ 60));
    const firstOfMonth = new Date(effectiveMonth.setMonth(date.getMonth()+1,1));
    document.getElementById('calculatedDate').value = firstOfMonth.toLocaleDateString();
};