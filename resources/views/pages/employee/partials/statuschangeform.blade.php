{{ Form::open(['action' => 'EmployeeStatusChangeController@submit', 'method' => 'POST']) }}
<h4>Employee Status Change</h4>
<hr/>
<div class="row card-footer">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="form-group required">
            <label class="control-label" for="requestDueDate">Effective Date</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                    </span>
                </div>
                <input type="text" class="form-control float-right" name="requestDueDate" id="requestDate" required>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="form-group">
            <label class="control-label" for="promotionType">Promoted?</label>
            <div class="">
                <select class="form-control" name="selectPromotion">
                    <option value="None"></option>
                    <option value="Yes ">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row card-footer">
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="name">Employee Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
        </div>
    </div>
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="position">Current Position</label>
            {{ Form::select('position', $position, null, ['class' => 'form-control', 'name' => 'position', 'placeholder' => '', 'required', 'style' => 'width:100%']) }}
        </div>
    </div>
</div>
<hr/>
<h4>Changes Occurred</h4>
<hr/>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="position">New Position</label>
            <input type="text" class="form-control" name="newPosition" id="position" placeholder="">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="newEmail">New Email</label>
            <input type="email" class="form-control" name="newEmail" id="newEmail" placeholder="">
        </div>
    </div>
</div>
<div class="row" >
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="phone">New Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="extension">New Ext</label>
            <input type="text" class="form-control" name="extension" id="extension" placeholder="">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="cellPhone">New Cell Phone</label>
            <input type="text" class="form-control" name="cellPhone" id="cellPhone" placeholder="">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="territory">New Territory</label>
            <input type="text" class="form-control" name="territory" id="territory" placeholder="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="department">New Division</label>
            {{ Form::select('division', str_replace(array('[', '"', ']'), '', $division), null, ['class' => 'form-control', 'name' => 'division', 'placeholder' => '', 'style' => 'width:100%']) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="department">New Department</label>
            {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), null, ['class' => 'form-control', 'name' => 'department', 'placeholder' => '', 'style' => 'width:100%']) }}
        </div>
    </div>

    <div class="col">
        <div class="form-group ">
            <label class="control-label" for="manager">New Manager</label>
            <input type="text" class="form-control" name="manager" id="manager" placeholder="">
        </div>
    </div>
</div>
<hr/>
<h4>Access Changes</h4>
<hr/>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="accessType">Access Type:</label>
            <div class="">
                <select class="form-control" name="selectAccess">
                    <option value="None"></option>
                    <option value="Manager">Manager</option>
                    <option value="Executive">Executive</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="fob">FOB #</label>
            <input type="text" class="form-control" name="fob" id="fob" placeholder="">   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="specialInstructions">Special Instructions</label>
            <textarea class="form-control" rows="4" name="specialInstructions" id="specialInstructions" placeholder=""></textarea> 
        </div>
    </div>
</div>
<hr/>
<h4>Additional Info</h4>
<hr/>
{{-- <div class="row card-footer">
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="submittedBy">Submitted By:</label>
            <input type="text" class="form-control" name="submittedBy" id="submittedBy" required> 
        </div>
    </div>
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="email2">Email address</label>
            <input type="email" class="form-control" name="email2" id="email2" placeholder="" required>
        </div>
    </div>
</div> --}}
<div class="row card-footer">
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="email3">Additional Recipients Email(s) (separate by comma):</label>
            <input type="email" class="form-control" name="email3" id="email3" multiple> 
        </div>
    </div>
    {{-- <div class="col">
        <div class="form-group">
            <label class="control-label" for="email4">Additional Recipient Email (2):</label>
            <input type="email" class="form-control" name="email4" id="email4" placeholder="">
        </div>
    </div> --}}
</div>
<hr/>
<!-- /.card-body -->

<div class="card-footer">
{{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
</div>
{{ Form::close() }}