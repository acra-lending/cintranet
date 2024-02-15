<div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
    <div class="card-body">
        <p>
            This form is to be used by all Citadel Servicing Corporation (“CSC”) employees to request development of any and all advertising, marketing, or promotional materials, including on materials posted to social media.
        </p>
        <p>
            CSC employees are <strong>NOT</strong> to issue, produce, post, or in any way distribute marketing materials that have not been approved in advance by the Marketing, Legal and Compliance Departments.
        </p>
        <p>
            All fields on this form should be filled out as much as possible. Any supporting documents should be submitted via email to: <a href="mailto:marketing@acralending.com">marketing@acralending.com</a>.
        </p> 
        <p>
            Please allow for a turnaround time of <strong>10-12 business days</strong> when requesting marketing materials. You may be contacted by a member of the Marketing Department regarding your request.
        </p>
        <p>
            <strong>For Funded Deals/Deal of the Day Social Image requests, Click </strong><a href="{{env('APP_URL')}}/sales/flyers#vert-tabs-fundeal"><strong>here</strong></a>.
        </p>
 
        <hr/>
        <!-- form start -->
        <form role="form" action="{{ url('marketing/resources') }}" method="POST">
            @csrf
                <h4>Contact Information</h4>
                <hr/>
                <div class="row card-footer">
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="department">Department</label>
                            <input type="text" class="form-control" name="department" id="department" placeholder="" required>
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
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="requestorName">Requestor's Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="" required>
                        </div>
                    </div>
                </div>
                <hr/>
                <h4>Project Specifications</h4>
                <hr/>
                <div class="row card-footer">
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="project">This is a(n):</label>
                            <div class="">
                                <select class="form-control" name="selectProject" required>
                                    <option value="New Project">New Project</option>
                                    <option value="Existing Project">Existing Project</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="projectName">Project Name</label>
                            <input type="text" class="form-control" name="projectName" id="projectName" placeholder="" required>   
                        </div>
                    </div>
                </div>
                <div class="row card-footer">
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="selectRequest">Select Request</label>
                            <div class="">
                                <select class="form-control" name="selectRequest" required>
                                    <option value="Flyer">Flyer</option>
                                    <option value="Mailer Piece">Mailer Piece</option>
                                    <option value="Video">Video</option>
                                    <option value="Print Advertisement">Print Advertisement</option>
                                    <option value="Webpage Post">Webpage Post</option>
                                    <option value="Social Media Post">Social Media Post</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="targetAudience">Target Audience</label>
                            <div class="">
                                <select class="form-control" name="selectAudience" required>
                                    <option value="Brokers">Brokers</option>
                                    <option value="Correspondents">Correspondents</option>
                                    <option value="Potential Borrowers">Potential Borrowers</option>
                                    <option value="Current Borrowers">Current Borrowers</option>
                                    <option value="General Public">General Public</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-footer">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="bodyMessage">Message</label>
                            <textarea class="form-control" rows="3" name="bodyMessage" id="bodyMessage" placeholder="What is the focus of the advertisement?"></textarea> 
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="relevantInfo">Relevant Information</label>
                            <textarea class="form-control" rows="3" name="relevantInfo" id="relevantInfo" placeholder="Include any relevant background information..."></textarea> 
                        </div>
                    </div>
                </div>
                <hr/>
                <h4>Additional Specifications</h4>
                <hr/>
                <div class="row card-footer">
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="estimatedQuantity">Estimated Quantity</label>
                            <input type="text" class="form-control" rows="1" name="estimatedQuantity" id="estimatedQuantity" required> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label class="control-label" for="requestDueDate">Requested Due Date</label>
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
                <div class="row card-footer">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group required">
                            <label class="control-label" for="statesDistributed">States materials will be distributed in</label>
                            <textarea class="form-control" rows="3" name="statesDistributed" id="statesDistributed" placeholder="e.g., California, Oregon, Nevada..." required></textarea> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group required">
                            <label class ="control-label" for="dateRange">Dates materials will be in circulation</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control float-right" name="dateRange" id="dateRange" required>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </div>
        </form>
    </div>
</div>