{{ Form::open(['action' => 'EmployeeStatusReportController@store', 'method' => 'POST']) }}
<h4>Out Of Office Form</h4>
<hr/>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="form-group required">
            <label class="control-label" for="requestDate">Date</label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                </div>
                <input type="text" class="form-control float-right" name="requestDate" id="requestDate" required>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="status">Today's List:</label>
            <textarea class="form-control" rows="10" name="body" id="body" placeholder=""></textarea> 
        </div>
    </div>
</div>
<hr/>
<!-- /.card-body -->

<div class="card-footer">
{{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
</div>
{{ Form::close() }}