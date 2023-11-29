<!-- Modal -->
<div class="modal fade" id="submissions" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Edit Link</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="message"></div>
            
            {{ Form::open(['action' => 'SubmissionsController@update', 'method' => 'POST']) }}
            @csrf
            <div class="input-group">
                <div class="input-group">
                    <div class="form-group col-sm-12">
                        {{ Form::label('ae_name', 'Name')}}
                        <input type="text" class="form-control" name="ae_name" id="ae_name">
                        {{ Form::label('submission_goals', 'Submission Goal')}}
                        <input type="text" class="form-control" name="submission_goal" id="submission_goal">
                        {{-- {{ Form::text('filename', $file->filename, ['class' => 'form-control', 'placeholder' => 'Filename']) }} --}}
                        <input type="text" name="submission_id" id="submission_id">
                        <input type="text" name="user_id" id="user_id">
                        {{-- <input type="text" class="form-control" name="link_title" id="link_title"> --}}
                        <br>
                        {{ Form::label('funding_goal', 'Funding Goal')}}
                        <input type="text" class="form-control" name="funding_goal" id="funding_goal">
                        <br>
                        {{-- {{ Form::label('link-title', 'Department')}}
                        <select class="form-control" name="link_category" id="link_category">
                          <option value="loan_set_up">Loan Set Up</option>
                          <option value="tm_retail_processing">Transaction Management / Retail Loan Processing</option>
                          <option value="underwriting">Underwriting</option>
                          <option value="closing">Closing</option>
                          <option value="funding">Funding</option>
                        </select> --}}
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          @can('edit-users')
          <button type="submit" class="btn btn-primary saveEvent">Save</button>
          @endcan
        </div>
        {{ Form::close() }}
      </div>
    </div>
</div>