$('#submissions').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var submissionGoal = button.data('submission_goal')
    var fundingGoal = button.data('funding_goal')
    var aeName = button.data('ae_name')
    var submissionId = button.data('submission_id')
    var userId = button.data('user_id')
    var modal = $(this)
    modal.find('.modal-body #submission_goal').val(submissionGoal);
    modal.find('.modal-body #funding_goal').val(fundingGoal);
    modal.find('.modal-body #ae_name').val(aeName);
    modal.find('.modal-body #submission_id').val(submissionId);
    modal.find('.modal-body #user_id').val(userId);
});