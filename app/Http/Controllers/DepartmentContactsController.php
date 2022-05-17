<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use Gate;
use DB;


class DepartmentContactsController extends Controller
{
    public function uwteams()
    {
        $underwriting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Underwriting')
        ->orderby('team', 'asc')
        // ->groupBy('team');
        ->get();

        $underwriting = collect($underwriting)->groupBy('team');

        return view('pages.directory.uwteams')
        ->with([
            'underwriting'                => $underwriting,
        ]);
    }

    public function tmteams()
    {
        $directorOfOperations = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('position', 'Director of Operations')
        ->first();

        $transactionManagers = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Transaction Managers')
        ->orderby('team', 'asc')
        ->get();

        $transactionManagers = collect($transactionManagers)->groupBy('team');

        return view('pages.directory.tmteams')
        ->with([
            'transactionManagers'                => $transactionManagers,
            'directorOfOperations'                => $directorOfOperations,
        ]);
    }

    public function cdlteams()
    {
        $consumerDirectTeams = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Consumer Direct Lending')
        ->orderby('team', 'asc')
        ->get();

        $consumerDirectTeams = collect($consumerDirectTeams)->groupBy('team');

        return view('pages.directory.cdlteams')
        ->with([
            'consumerDirectTeams'       => $consumerDirectTeams,
        ]);
    }

    public function podsList()
    {
        $pods = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->whereNotNull('pod_id')
        ->orderBy('name')
        // ->orderBy('pod_uw_lead_name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);

        $podTms = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->whereNotNull('pod_id')
        ->where('pod_tm_lead', 1)
        ->orderBy('name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);

        $podUws = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->whereNotNull('pod_id')
        ->where('pod_uw_lead', 1)
        ->orderBy('name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);

        $pod6UwGroup1 = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('pod_id', 6)
        ->where('pod_uw_lead_name', 'DSCR / FNF UW Team')
        ->orderBy('name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);

        $pod6UwGroup2 = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('pod_id', 6)
        ->where('pod_uw_lead_name', 'Consumer Direct')
        ->orderBy('name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);

        $pod6UwGroup3 = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('pod_id', 6)
        ->where('pod_uw_lead_name', 'Correspondent')
        ->orderBy('name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);

        $pod6UwGroup3 = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('pod_id', 6)
        ->where('pod_uw_lead_name', 'Multifamily')
        ->orderBy('name')
        // ->where('pod_id', '1')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'position',
            'team',
            'pod_id',
            'pod_lead',
            'pod_tm_lead',
            'pod_tm_lead_name',
            'pod_uw_lead',
            'pod_uw_lead_name',
        ]);


        $pod1Lead = array();
        $pod1Tms = array();
        $pod1TmUsers = array();
        $pod1Uws = array();
        $pod1UwUsers = array();

        $pod2Lead = array();
        $pod2Tms = array();
        $pod2TmUsers = array();
        $pod2Uws = array();
        $pod2UwUsers = array();

        $pod3Lead = array();
        $pod3Tms = array();
        $pod3TmUsers = array();
        $pod3Uws = array();
        $pod3UwUsers = array();

        $pod4Lead = array();
        $pod4Tms = array();
        $pod4TmUsers = array();
        $pod4Uws = array();
        $pod4UwUsers = array();

        $pod5Lead = array();
        $pod5Tms = array();
        $pod5TmUsers = array();
        $pod5Uws = array();
        $pod5UwUsers = array();

        $pod6Lead = array();
        $pod6Uws = array();
        $pod6UwUsers = array();
        $pod6UwUsersGroup1 = array();
        $pod6UwUsersGroup2 = array();
        $pod6UwUsersGroup3 = array();
        $pod6UwUsersGroup4 = array();


        foreach ($podTms as $podTm) {
            if ($podTm->pod_id == "1") {
                $pod1Tms[] = [
                    'id' => $podTm->id,
                    'name' => $podTm->name,
                    'position' => $podTm->position,
                    'reports' => $podTm->team,
                ];
            }
            if ($podTm->pod_id == "2") {
                $pod2Tms[] = [
                    'id' => $podTm->id,
                    'name' => $podTm->name,
                    'position' => $podTm->position,
                    'reports' => $podTm->team,
                ];
            }
            if ($podTm->pod_id == "3") {
                $pod3Tms[] = [
                    'id' => $podTm->id,
                    'name' => $podTm->name,
                    'position' => $podTm->position,
                    'reports' => $podTm->team,
                ];
            }
            if ($podTm->pod_id == "4") {
                $pod4Tms[] = [
                    'id' => $podTm->id,
                    'name' => $podTm->name,
                    'position' => $podTm->position,
                    'reports' => $podTm->team,
                ];
            }
            if ($podTm->pod_id == "5") {
                $pod5Tms[] = [
                    'id' => $podTm->id,
                    'name' => $podTm->name,
                    'position' => $podTm->position,
                    'reports' => $podTm->team,
                ];
            }
            if ($podTm->pod_id == "6") {
                $pod6Tms[] = [
                    'id' => $podTm->id,
                    'name' => $podTm->name,
                    'position' => $podTm->position,
                    'reports' => $podTm->team,
                ];
            }
        }

        foreach ($podUws as $podUw) {
            if ($podUw->pod_id == "1") {
                $pod1Uws[] = [
                    'id' => $podUw->id,
                    'name' => $podUw->name,
                    'position' => $podUw->position,
                    'reports' => $podUw->team,
                ];
            }
            
            if ($podUw->pod_id == "2") {
                $pod2Uws[] = [
                    'id' => $podUw->id,
                    'name' => $podUw->name,
                    'position' => $podUw->position,
                    'reports' => $podUw->team,
                ];
            }
            if ($podUw->pod_id == "3") {
                $pod3Uws[] = [
                    'id' => $podUw->id,
                    'name' => $podUw->name,
                    'position' => $podUw->position,
                    'reports' => $podUw->team,
                ];
            }
            if ($podUw->pod_id == "4") {
                $pod4Uws[] = [
                    'id' => $podUw->id,
                    'name' => $podUw->name,
                    'position' => $podUw->position,
                    'reports' => $podUw->team,
                ];
            }
            if ($podUw->pod_id == "5") {
                $pod5Uws[] = [
                    'id' => $podUw->id,
                    'name' => $podUw->name,
                    'position' => $podUw->position,
                    'reports' => $podUw->team,
                ];
            }
            if ($podUw->pod_id == "6" && $podUw->pod_uw_lead_name == $podUw->name) {
                $pod6Uws[] = [
                    'id' => $podUw->id,
                    'name' => $podUw->name,
                    'position' => $podUw->position,
                    'uw pod'   => $podUw->pod_uw_lead_name,
                    'reports' => $podUw->team,
                ];
            }

        }

        foreach ($pods as $pod) {
            if ($pod->pod_id == "1") {

                if ($pod->pod_lead == 1) {
                    $pod1Lead[] = [
                        'id'    => $pod->id,
                        'tm_team' => $pod->pod_tm_lead_name,
                        'name' => $pod->name,
                        'position' => $pod->position,
                        'reports' => $pod->team
                    ];
                }

                foreach ($podTms as $PodTm) {
                    if ($pod->pod_tm_lead_name == $PodTm->name) {
                        $pod1TmUsers[] = [
                            'id' => $pod->id,
                            'tm_team' => $pod->pod_tm_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }

                foreach ($podUws as $podUw) {
                    if ($pod->pod_uw_lead_name == $podUw->name && $pod->pod_uw_lead_name !== '') {
                        $pod1UwUsers[] = [
                            'id' => $pod->id,
                            'uw_team' => $pod->pod_uw_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }
            }

            if ($pod->pod_id == "2") {
                if ($pod->pod_lead == 1) {
                    $pod2Lead[] = [
                        'id'    => $pod->id,
                        'tm_team' => $pod->pod_tm_lead_name,
                        'name' => $pod->name,
                        'position' => $pod->position,
                        'reports' => $pod->team
                    ];
                }

                foreach ($podTms as $PodTm) {
                    if ($pod->pod_tm_lead_name == $PodTm->name) {
                        $pod2TmUsers[] = [
                            'id' => $pod->id,
                            'tm_team' => $pod->pod_tm_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }

                foreach ($podUws as $podUw) {
                    if ($pod->pod_uw_lead_name == $podUw->name && $pod->pod_uw_lead_name !== '') {
                        $pod2UwUsers[] = [
                            'id' => $pod->id,
                            'uw_team' => $pod->pod_uw_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }
            }

            if ($pod->pod_id == "3") {
                if ($pod->pod_lead == 1) {
                    $pod3Lead[] = [
                        'id'    => $pod->id,
                        'tm_team' => $pod->pod_tm_lead_name,
                        'name' => $pod->name,
                        'position' => $pod->position,
                        'reports' => $pod->team
                    ];
                }

                foreach ($podTms as $PodTm) {
                    if ($pod->pod_tm_lead_name == $PodTm->name) {
                        $pod3TmUsers[] = [
                            'id' => $pod->id,
                            'tm_team' => $pod->pod_tm_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }

                foreach ($podUws as $podUw) {
                    if ($pod->pod_uw_lead_name == $podUw->name && $pod->pod_uw_lead_name !== '') {
                        $pod3UwUsers[] = [
                            'id' => $pod->id,
                            'uw_team' => $pod->pod_uw_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }
            }
            if ($pod->pod_id == "4") {
                if ($pod->pod_lead == 1) {
                    $pod4Lead[] = [
                        'id'    => $pod->id,
                        'tm_team' => $pod->pod_tm_lead_name,
                        'name' => $pod->name,
                        'position' => $pod->position,
                        'reports' => $pod->team
                    ];
                }

                foreach ($podTms as $PodTm) {
                    if ($pod->pod_tm_lead_name == $PodTm->name) {
                        $pod4TmUsers[] = [
                            'id' => $pod->id,
                            'tm_team' => $pod->pod_tm_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }

                foreach ($podUws as $podUw) {
                    if ($pod->pod_uw_lead_name == $podUw->name && $pod->pod_uw_lead_name !== '') {
                        $pod4UwUsers[] = [
                            'id' => $pod->id,
                            'uw_team' => $pod->pod_uw_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }
            }
            if ($pod->pod_id == "5") {
                if ($pod->pod_lead == 1) {
                    $pod5Lead[] = [
                        'id'    => $pod->id,
                        'tm_team' => $pod->pod_tm_lead_name,
                        'name' => $pod->name,
                        'position' => $pod->position,
                        'reports' => $pod->team
                    ];
                }

                foreach ($podTms as $PodTm) {
                    if ($pod->pod_tm_lead_name == $PodTm->name) {
                        $pod5TmUsers[] = [
                            'id' => $pod->id,
                            'tm_team' => $pod->pod_tm_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }

                foreach ($podUws as $podUw) {
                    if ($pod->pod_uw_lead_name == $podUw->name && $pod->pod_uw_lead_name !== '') {
                        $pod5UwUsers[] = [
                            'id' => $pod->id,
                            'uw_team' => $pod->pod_uw_lead_name,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }

            }
            if ($pod->pod_id == "6") {

                if ($pod->pod_lead == 1) {
                    $pod6Lead[] = [
                        'id'    => $pod->id,
                        'tm_team' => $pod->pod_tm_lead_name,
                        'name' => $pod->name,
                        'position' => $pod->position,
                        'reports' => $pod->team
                    ];
                }

                foreach ($podUws as $podUw) {
                    if ($pod->pod_uw_lead_name == $podUw->name && $pod->pod_uw_lead_name !== '') {
                        $pod6UwUsers[] = [
                            'id' => $pod->id,
                            'uw_team' => $pod->pod_uw_lead_name,
                            'uw_lead' => $pod->pod_uw_lead,
                            'name' => $pod->name,
                            'position' => $pod->position,
                            'reports' => $pod->team
                        ];
                    }
                }
            }
        }

        foreach ($pod6UwGroup1 as $pod6Group1) {
            $pod6UwUsersGroup1[] = [
                'id' => $pod6Group1->id,
                'uw_team' => $pod6Group1->pod_uw_lead_name,
                'uw_lead' => $pod6Group1->pod_uw_lead,
                'name' => $pod6Group1->name,
                'position' => $pod6Group1->position,
                'reports' => $pod6Group1->team
            ];
        }
        
        foreach ($pod6UwGroup2 as $pod6Group2) {
            
            $pod6UwUsersGroup2[] = [
                'id' => $pod6Group2->id,
                'uw_team' => $pod6Group2->pod_uw_lead_name,
                'uw_lead' => $pod6Group2->pod_uw_lead,
                'name' => $pod6Group2->name,
                'position' => $pod6Group2->position,
                'reports' => $pod6Group2->team
            ]; 
            
        }

        foreach ($pod6UwGroup3 as $pod6Group3) {
            
            $pod6UwUsersGroup3[] = [
                'id' => $pod6Group3->id,
                'uw_team' => $pod6Group3->pod_uw_lead_name,
                'uw_lead' => $pod6Group3->pod_uw_lead,
                'name' => $pod6Group3->name,
                'position' => $pod6Group3->position,
                'reports' => $pod6Group3->team
            ];
            
        }

        foreach ($pod6UwGroup4 as $pod6Group4) {
            
            $pod6UwUsersGroup4[] = [
                'id' => $pod6Group4->id,
                'uw_team' => $pod6Group4->pod_uw_lead_name,
                'uw_lead' => $pod6Group4->pod_uw_lead,
                'name' => $pod6Group4->name,
                'position' => $pod6Group4->position,
                'reports' => $pod6Group4->team
            ];
            
        }


        return view('pages.directory.pods')->with([
            'pod1Lead'     => $pod1Lead,
            'pod1Tms'      => $pod1Tms,
            'pod1TmUsers'  => $pod1TmUsers,
            'pod1Uws'      => $pod1Uws,
            'pod1UwUsers'  => $pod1UwUsers,
            'pod2Lead'     => $pod2Lead,
            'pod2Tms'      => $pod2Tms,
            'pod2TmUsers'  => $pod2TmUsers,
            'pod2Uws'      => $pod2Uws,
            'pod2UwUsers'  => $pod2UwUsers,
            'pod3Lead'     => $pod3Lead,
            'pod3Tms'      => $pod3Tms,
            'pod3TmUsers'  => $pod3TmUsers,
            'pod3Uws'      => $pod3Uws,
            'pod3UwUsers'  => $pod3UwUsers,
            'pod4Lead'     => $pod4Lead,
            'pod4Tms'      => $pod4Tms,
            'pod4TmUsers'  => $pod4TmUsers,
            'pod4Uws'      => $pod4Uws,
            'pod4UwUsers'  => $pod4UwUsers,
            'pod5Lead'     => $pod5Lead,
            'pod5Tms'      => $pod5Tms,
            'pod5TmUsers'  => $pod5TmUsers,
            'pod5Uws'      => $pod5Uws,
            'pod5UwUsers'  => $pod5UwUsers,
            'pod6Lead'     => $pod6Lead,
            'pod6Uws'      => $pod6Uws,
            'pod6UwUsers'  => $pod6UwUsers,
            'pod6UwGroup1'       => $pod6UwGroup1,
            'pod6UwGroup2'       => $pod6UwGroup2,
            'pod6UwGroup3'       => $pod6UwGroup3,
            'pod6UwUsersGroup1'  => $pod6UwUsersGroup1,
            'pod6UwUsersGroup2'  => $pod6UwUsersGroup2,
            'pod6UwUsersGroup3'  => $pod6UwUsersGroup3,
            'pod6UwUsersGroup4'  => $pod6UwUsersGroup4,
        ]);
    }
}
