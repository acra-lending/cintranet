
<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
    <div class="card card-danger card-outline">
      <div class="card-body box-profile">
        <div class="">
          <h3 class="profile-username text-center">
            POD Overflow
          </h3>
          <h3 class="profile-username text-center">
            @if ( count($pod6Lead))
                {{ $pod6Lead[0]['name'] }}
          </h3>
          <p class="text-muted text-center">
            <a href="mailto:pod.overflow@acralending.com">pod.overflow@acralending.com</a>
          </p>
            
            <div class="center">
                <h3 class="profile-username highlight">
                    Overflow Pods
                </h3>
            </div>
            @foreach ($pod6Uws as $podUw) 
                @foreach ($pod6UwUsers as $user) 
                    @if ($user['uw_team'] == $podUw['name'])   
                        
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
                @endforeach
            @endforeach
            
            <div class="center">
                <h3 class="profile-username highlight"> 
                    {{ $pod6UwGroup4[0]->pod_uw_lead_name }}
                </h3>
            </div>
                @foreach ($pod6UwUsersGroup4 as $user)
                    @if ($user['uw_team'] == $pod6UwGroup4[0]->pod_uw_lead_name)
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
                            @if ($user['pod_uw_lead'] == '1')
                            <b>
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            </b>
                            @else
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            @endif
                        </ul>
                    @endif
                @endforeach
            <div class="center">
                <h3 class="profile-username highlight"> 
                    {{ $pod6UwGroup1[0]->pod_uw_lead_name }}
                </h3>
            </div>
                @foreach ($pod6UwUsersGroup1 as $user)
                    @if ($user['uw_team'] == $pod6UwGroup1[0]->pod_uw_lead_name)
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
                            @if ($user['pod_uw_lead'] == '1')
                            <b>
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            </b>
                            @else
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            @endif
                        </ul>
                    @endif
                @endforeach
            <div class="center">
                <h3 class="profile-username highlight"> 
                    {{ $pod6UwGroup2[0]->pod_uw_lead_name }}
                </h3>
            </div>
                @foreach ($pod6UwUsersGroup2 as $user)
                    @if ($user['uw_team'] == $pod6UwGroup2[0]->pod_uw_lead_name)
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
                            @if ($user['pod_uw_lead'] == '1')
                            <b>
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            </b>
                            @else
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            @endif
                        </ul>
                    @endif
                @endforeach
            <div class="center">
                <h3 class="profile-username highlight"> 
                    {{ $pod6UwGroup3[0]->pod_uw_lead_name }}
                </h3>
            </div>
                @foreach ($pod6UwUsersGroup3 as $user)
                    @if ($user['uw_team'] == $pod6UwGroup3[0]->pod_uw_lead_name)
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
                            @if ($user['pod_uw_lead'] == '1')
                            <b>
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            </b>
                            @else
                                <li><a href="#">{{ $user['name'] }}</a></li>
                                <li>{{ $user['position'] }}</li>
                                <li>{{ $initials2 }}</li>
                            @endif
                        </ul>
                    @endif
                @endforeach    
            @endif
        </div>
      </div>
    </div>
  </div>