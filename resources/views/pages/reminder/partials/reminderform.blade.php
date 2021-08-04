{{ Form::open(['action' => 'ReminderController@store', 'method' => 'POST']) }}
<h4>Reminders Form</h4>
<hr/>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="status">Reminders:</label>
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