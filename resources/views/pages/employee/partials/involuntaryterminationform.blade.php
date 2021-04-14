<div class="tab-pane fade show" id="nav-involuntary" role="tabpanel" aria-labelledby="nav-involuntary-tab">
    <div class="card-body">
        <hr/>
        {{ Form::open(['action' => 'EmployeeInvoluntaryTerminationController@submit', 'method' => 'POST']) }}
        <h4>Involuntary Employee Termination</h4>
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
                        <input type="text" class="form-control float-right" name="requestDueDate" id="requestDate2" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-footer">
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <label class="control-label" for="accessType">Status</label>
                    <div class="">
                        <select class="form-control" name="status">
                            <option value="None"></option>
                            <option value="Involuntary Termination">Involuntary Termination</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row card-footer">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group required">
                    <label class="control-label" for="name">Employee Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group required">
                    <label class="control-label" for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group required">
                    <label class="control-label" for="position">Position</label>
                    {{ Form::select('position', $position, null, ['class' => 'form-control', 'name' => 'position', 'placeholder' => '', 'style' => 'width:100%']) }}
                </div>
            </div>
        </div>
        <div class="row card-footer">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="emailForward">Email Forwarding</label>
                    <div class="">
                        <select class="form-control" name="emailForward">
                            <option value="None"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="email2">Forwarding Email</label>
                    <input type="email" class="form-control" name="email2" id="email2" placeholder="">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="duration">Duration</label>
                    <select class="form-control" name="duration">
                        <option value="None"></option>
                        <option value="1 Month">1 Month</option>
                        <option value="3 Months">3 Months</option>
                        <option value="6 Months">6 Months</option>
                    </select>
                </div>
            </div>
        </div>
        <hr/>
        <h4>Please Indicate Any System Access to be Retained or Reassigned</h4>
        <hr/>
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="form-group required">
                    <label class="control-label" for="designateAccess">Designate Access</label>
                    <input type="text" class="form-control" name="designateAccess" id="designateAccess" required>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="form-group">
                    <label for="specialInstructions">Special Instructions</label>
                    <textarea class="form-control" rows="4" name="specialInstructions" id="specialInstructions" placeholder=""></textarea> 
                </div>
            </div>
        </div>
        <hr/>
        <h4>Additional Info</h4>
        <hr/>
        <div class="row card-footer">
            <div class="col">
                <div class="form-group required">
                    <label class="control-label" for="submittedBy">Submitted By:</label>
                    <input type="text" class="form-control" name="submittedBy" id="submittedBy" required> 
                </div>
            </div>
            <div class="col">
                <div class="form-group required">
                    <label class="control-label" for="email3">Email address</label>
                    <input type="email" class="form-control" name="email3" id="email3" placeholder="" required>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="control-label" for="email4">Additional Recipient Email:</label>
                    <input type="email" class="form-control" name="email4" id="email4"> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="control-label" for="email5">Additional Recipient Email (2):</label>
                    <input type="email" class="form-control" name="email5" id="email5" placeholder="">
                </div>
            </div>
        </div> --}}
        <hr/>
        <!-- /.card-body -->

        <div class="card-footer">
        {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
