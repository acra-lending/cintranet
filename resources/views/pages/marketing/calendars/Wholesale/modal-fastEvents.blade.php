<!-- Modal -->
<div class="modal fade" id="modalFastEvent" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="message"></div>
            <form id="formFastEvent">
                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Event Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" id="title">
                        <input type="hidden" name="id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="start" class="col-sm-4 col-form-label">Event Start</label>
                    <div class="col-sm-8">
                        <input type="time" name="start" class="form-control" id="start">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="end" class="col-sm-4 col-form-label">Event End</label>
                    <div class="col-sm-8">
                        <input type="time" name="end" class="form-control" id="end">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color" class="col-sm-4 col-form-label">Event Color</label>
                    <div class="col-sm-8">
                        <input type="color" name="color" class="form-control" id="color">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="description" class="col-sm-4 col-form-label">Event Description</label>
                    <div class="col-sm-8">
                        <textarea name="description" id="description" cols="40" rows="4"></textarea>
                    </div>
                </div> --}}
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          @can('delete-posts')
          <button type="button" class="btn btn-danger deleteFastEvent">Delete</button>
          @endcan
          @can('edit-posts')
          <button type="button" class="btn btn-primary saveFastEvent">Save</button>
          @endcan
        </div>
      </div>
    </div>
  </div>