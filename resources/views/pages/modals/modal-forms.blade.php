<!-- Modal -->
<div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Edit File</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="message"></div>
            <p><strong>*Note:</strong> A file name <strong>can't</strong> contain the following characters:<br>\ / : * ? " < > | </p>
            {{ Form::open(['action' => 'UploadController@update', 'method' => 'PUT']) }}
            @csrf
            <div class="input-group">
                <div class="input-group">
                    <div class="form-group col-sm-12">
                      {{ Form::label('filename', 'Filename')}}
                      <input type="hidden" name="file_id" id="file_id" value="">
                      <input type="text" class="form-control" name="filename" id="filename">
                    </div>
                    <div class="form-group col-sm-12">
                      {{ Form::label('category_id', 'Category Id')}}<br>
                      <textarea rows="3" cols="60" name="category_id" id="category_id"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          @can('edit-posts')
          <button type="submit" class="btn btn-primary saveEvent">Save</button>
          @endcan
        </div>
        {{ Form::close() }}
      </div>
    </div>
</div>