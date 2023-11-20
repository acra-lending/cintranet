$('#editLinks').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var title = button.data('link_title')
    var url = button.data('link_url')
    var linkCategory = button.data('link_category')
    var id = button.data('link_id')
    var modal = $(this)
    modal.find('.modal-body #link_title').val(title);
    modal.find('.modal-body #link_url').val(url);
    modal.find('.modal-body #link_category').val(linkCategory);
    modal.find('.modal-body #link_id').val(id);
});