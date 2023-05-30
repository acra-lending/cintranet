{{ Form::open(['action' => 'EmployeeNewHireController@submit', 'method' => 'POST']) }}
<h4>New Employee</h4>
<hr/>
<div class="row card-footer">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="form-group required">
            <label class="control-label" for="requestDueDate">Start Date</label>
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
</div>
{{-- <div class="row card-footer">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="form-group required">
            <label class="control-label" for="name">Employee ID</label>
            <input type="text" class="form-control" name="employeeID" id="employeeID" placeholder="" required>
        </div>
    </div>
</div> --}}
<div class="row card-footer">
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="name">Employee Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
        </div>
    </div>
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="" required>
        </div>
    </div>
</div>
<div class="row card-footer">
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="extension">Ext</label>
            <input type="text" class="form-control" name="extension" id="extension" placeholder="">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group required">
            <label class="control-label" for="cellPhone">Cell</label>
            <input type="text" class="form-control" name="cellPhone" id="cellPhone" placeholder="" required>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <label class="control-label" for="territory">Territory</label>
            <input type="text" class="form-control" name="territory" id="territory" placeholder="">
        </div>
    </div>
</div>
<div class="row card-footer">
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="department">Division</label>
            {{ Form::select('division', str_replace(array('[', '"', ']'), '', $division), null, ['class' => 'form-control', 'name' => 'division', 'placeholder' => '', 'style' => 'width:100%']) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="department">Department</label>
            {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), null, ['class' => 'form-control', 'name' => 'department', 'placeholder' => '', 'style' => 'width:100%']) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="position">Position</label>
            <!-- <input type="text" class="form-control" name="position" id="position" placeholder="" required> -->
            {{ Form::select('position', str_replace(array('[', '"', ']'), '', $position), null, ['class' => 'form-control', 'name' => 'position', 'placeholder' => '', 'style' => 'width:100%']) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="manager">Manager</label>
            <input type="text" class="form-control" name="manager" id="manager" placeholder="" required>
        </div>
    </div>
</div>
<div class="row card-footer">
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="mortgage101">Mortgage 101:</label>
            <div class="">
                <select class="form-control" name="mortgage101">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="training">Requires Sales Training Enrollment:</label>
            <div class="">
                <select class="form-control" name="training">
                    <option value="No">No</option>
                    <option value="Yes: 5-Day">Yes: 5-Day</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="nmls">NMLS:</label>
            <input type="text" class="form-control" name="nmls" id="nmls" placeholder="">
        </div>
    </div>
</div>
<hr/>
<h4>Access</h4>
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
    <div class="col">
        <div class="form-group required">
            <label class="control-label" for="location">Location</label>
            <div class="">
                <select class="form-control" name="location" required>
                    <option selected disabled>Please select</option> 
                    <option value="CA - Corporate">CA - Ada Head Office</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Nevada">Nevada</option>
                    <option value="Utah">Utah</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Florida">Florida</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Remote">Remote</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label class="control-label" for="remoteLocation">If remote, please enter state:</label>
            <input type="text" class="form-control" name="remoteLocation" id="remoteLocation" placeholder="">   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="form-group">
            <label for="specialInstructions">Note <em>(this will be auto-generated)</em>:</label>
            <p class="" rows="4" name="note" id="note" placeholder=""></p> 
        </div>
        <script>
            function notes() {
                const note = document.getElementById('note')
                const date = document.getElementById('requestDate').value
                let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
                let effectiveDate  = new Date(date)
                const text = document.createTextNode(effectiveDate.toLocaleDateString('en-US', options))
                console.log(text)
                note.innerHTML = ""
                let str1 = "New hire effective"
                let str2 = text
                
                note.innerHTML = "New hire effective "
                note.appendChild(text)
            }
        </script>
    </div>
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
            <label class="control-label" for="email2">Submitter's Email</label>
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