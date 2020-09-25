$('#editForm').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('filename')
    var categoryId = button.data('category_id')
    var modal = $(this)
    modal.find('.modal-body #filename').val(title);
    modal.find('.modal-body #category_id').val(categoryId);
});