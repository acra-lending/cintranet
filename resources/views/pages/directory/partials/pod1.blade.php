
<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
    <div class="card card-danger card-outline">
      <div class="card-body box-profile">
        <div class="">
          <h3 class="profile-username text-center">
            POD 1
          </h3>
          <h3 class="profile-username text-center">
              @if ( count($pod1Lead))
                {{ $pod1Lead[0]['name'] }}
          </h3>
          <p class="text-muted text-center">
            <a href="mailto:pod1@acralending.com">pod1@acralending.com</a>
          </p>
            @foreach ($pod1Tms as $podTm)
            <div class="center">
                <h3 class="profile-username highlight">
                    TM Team {{ $podTm['name'] }}
                </h3>
            </div>
                @foreach ($pod1TmUsers as $user)
                    @if ($user['tm_team'] == $podTm['name'])   
                        @if ($user['name'] !== $podTm['name'])
                            <ul class="pod-ul">
                                @if ($user['tm_team'] !== '')
                                    @php
                                        $words2 = explode(' ', $user['reports']); $initials2 = null; foreach ($words2 as $w2) {
                                            $initials2 .= $w2[0];
                                        }  
                                    @endphp
                                @else
                                    @php
                                        $initials2 = null;
                                    @endphp
                                @endif
                                @if ($user['lead'] == '1')                            
                                    <li><a href="/directory/user/{{$user['id']}}"><b>{{ $user['name'] }}</b></a></li>
                                    <li><b>{{ $user['position'] }}</b></li>
                                    <li><b>{{ $initials2 }}</b></li>
                                @else
                                    <li><a href="/directory/user/{{$user['id']}}">{{ $user['name'] }}</a></li>
                                    <li>{{ $user['position'] }}</li>
                                    <li>{{ $initials2 }}</li>
                                @endif
                            </ul>
                        @endif
                    @endif
                @endforeach
            @endforeach
            @foreach ($pod1Uws as $podUw)
            <div class="center">
                <h3 class="profile-username highlight">
                    UW Team {{ $podUw['name'] }}
                </h3>
            </div>
                @foreach ($pod1UwUsers as $user)
                    @if ($user['uw_team'] == $podUw['name'])   
                        @if ($user['name'] !== $podUw['name'])
                        <ul class="pod-ul">
                            @if ($user['uw_team'] !== '')
                                @php
                                    $words2 = explode(' ', $user['reports']); $initials2 = null; foreach ($words2 as $w2) {
                                        $initials2 .= $w2[0];
                                    }  
                                @endphp
                            @else
                                @php
                                    $initials2 = null;
                                @endphp
                            @endif
                            <li><a href="/directory/user/{{$user['id']}}">{{ $user['name'] }}</a></li>
                            <li>{{ $user['position'] }}</li>
                            <li>{{ $initials2 }}</li>
                        </ul>
                        @endif
                    @endif
                @endforeach
            @endforeach
        </div>
        @endif
      </div>
    </div>
  </div>