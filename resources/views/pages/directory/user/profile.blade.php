@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Directory</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @foreach($profile as $contact)  
          <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <!-- Profile Image -->
              <div class="card card-danger card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset ('img/avatar1.png') }}"
                         alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center">{{$contact->firstname}} {{$contact->lastname}}</h3>
  
                  <p class="text-muted text-center">{{$contact->position}}</p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right" href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Direct Phone</b> <a class="float-right">{{$contact->directphone}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Ext</b> <a class="float-right">{{$contact->extension}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Department</b> <a class="float-right">{{str_replace(array('[', '"', ']',), '',$contact->departments)}}</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

  
              <!-- About Me Box -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-users mr-1"></i> Team</strong>
  
                  <p class="text-muted">
                    {{$contact->team}}
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Team Region</strong>
  
                  <p class="text-muted">{{$contact->teamregion}}</p>
  
                  <hr>
  
                  <strong><i class="fas fa-clock mr-1"></i> Member Since</strong>
  
                  <p class="text-muted">
                    <span class="tag tag-danger">{{ date('F jS, Y', strtotime($contact->created_at)) }}</span>
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-phone mr-1"></i> Cell Phone</strong>
  
                  <p class="text-muted">{{$contact->cell}}</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            {{-- <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="{{ asset ('img/avatar1.png') }}" alt="user image">
                          <span class="username">
                            <a href="#">Hitz Mistry</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 2:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            Please update brand guidelines and upload to Cintranet storage folder.
                        </p>
  
                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (2)
                            </a>
                          </span>
                        </p>
  
                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      <!-- /.post -->
  
                      <!-- Post -->
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="{{ asset ('img/avatar1.png') }}" alt="User Image">
                          <span class="username">
                            <a href="#">Chris Liu</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Sent you a message - 3 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            Hey John, let's meet at 11:00 AM on Tuesday to go over the website.
                        </p>
  
                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Response">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.post -->
  
                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="{{ asset ('img/avatar1.png') }}" alt="User Image">
                          <span class="username">
                            <a href="#">John Alexander Nguyen</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="row mb-3">
                          <div class="col-sm-6">
                            <img class="img-fluid" src="{{ asset ('img/photo1.jpg') }}" alt="Photo">
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <div class="row">
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="{{ asset ('img/photo2.jpg') }}" alt="Photo">
                                <img class="img-fluid" src="{{ asset ('img/photo3.jpg') }}" alt="Photo">
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="{{ asset ('img/photo4.jpg') }}" alt="Photo">
                                <img class="img-fluid" src="{{ asset ('img/photo5.jpg') }}" alt="Photo">
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
  
                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                          <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>
  
                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                      <!-- The timeline -->
                      <div class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-danger">
                            10 Feb. 2020
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>
  
                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 12:05</span>
  
                            <h3 class="timeline-header"><a href="#">IT Department</a> sent you an email</h3>
  
                            <div class="timeline-body">
                              We need to update the website with a better ticketing system. Please check your
                              email to see the new requirements we need to implement...
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-user bg-info"></i>
  
                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
  
                            <h3 class="timeline-header border-0"><a href="#">Kyle Gunderlock</a> accepted your friend request
                            </h3>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-comments bg-warning"></i>
  
                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
  
                            <h3 class="timeline-header"><a href="#">Hitz Mistry</a> commented on your post</h3>
  
                            <div class="timeline-body">
                              The new flyers look great!
                            </div>
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-success">
                            3 Jan. 2020
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-camera bg-purple"></i>
  
                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
  
                            <h3 class="timeline-header"><a href="#">Chris Liu</a> uploaded new photos</h3>
  
                            <div class="timeline-body">
                              <img src="{{ asset ('img/photo1.jpg') }}" alt="image-upload" width="150" height="100">
                              <img src="{{ asset ('img/photo2.jpg') }}" alt="image-upload" width="150" height="100">
                              <img src="{{ asset ('img/photo3.jpg') }}" alt="image-upload" width="150" height="100">
                              <img src="{{ asset ('img/photo4.jpg') }}" alt="image-upload" width="150" height="100">
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <div>
                          <i class="far fa-clock bg-gray"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
  
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Location</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Location">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="float-right">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div> --}}
            <!-- /.col -->
          </div>
          <!-- /.row -->
          @endforeach  
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- ./wrapper -->

@stop