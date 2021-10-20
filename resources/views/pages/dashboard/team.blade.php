<!-- Team Members -->
<div class="card card-danger card-outline">
    <div class="card-header">
    <h3 class="card-title">
        <i class="nav-icon fas fa-users"></i>
        Team Members
    </h3>
    </div>
    <div class="card-body">
        @if(!empty($teamMembers))
            <ul class="users-list clearfix">
                @foreach($teamMembers as $team)
                <li>
                    <img class="float-right mr-4" src="{{ ($team->avatar) ? url('/storage/avatars/' .$team->avatar) : asset('img/avatar1.png') }}" alt="User Image">
                    <br>
                    <br>
                    <br>
                    @if($team->name == $teamLead->name)
                    <strong>Team Lead</strong>
                    @endif
                    <a class="users-list-name" href="/directory/user/{{$team->id}}">{{ $team->firstname }} {{$team->lastname}}</a>
                    <span class="users-list-date">{{ Carbon\Carbon::parse($team->lastvisitDate)->diffForHumans() }}</span>
                </li>
            @endforeach
            </ul>
        <div class="float-right pr-3 pb-3">
            <a href="{{action ('DirectoryController@index', ['search' => $team->team]) }}" class="small-box-footer float-right">View More <i class="fas fa-chevron-circle-right"></i></a>
        </div>
        @else
            <p>No team members</p>
        @endif
    </div>
</div>