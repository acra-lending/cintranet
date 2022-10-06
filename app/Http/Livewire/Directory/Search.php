<?php

namespace App\Http\Livewire\Directory;

use Livewire\Component;
use Livewire\WithPagination;
use App\Directory;
use App\Role;
use Gate;
use DB;

class Search extends Component
{
    use WithPagination;

    public $search = '';
    public $position;
    public $department;
    public $team;

    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // $search = '%'.$this->search.'%';

        $positions = DB::table('s2zar_jsn_users')
        ->orderBy('position', 'asc')
        ->groupBy('position')
        ->where('position', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('position', 'position')
        ->toArray();

        $division = DB::table('s2zar_jsn_users')
        ->orderBy('division', 'asc')
        ->groupBy('division')
        ->where('division', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('division', 'division')
        ->toArray();

        $departments = DB::table('s2zar_jsn_users')
        ->orderBy('departments', 'asc')
        ->groupBy('departments')
        ->where('departments', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('departments', 'departments')
        ->toArray();

        $teams = DB::table('s2zar_jsn_users')
        ->orderBy('team', 'asc')
        ->groupBy('team')
        ->where('team', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('team')
        ->toArray();
        
        return view('livewire.directory.search', [
            'contacts' => DB::table('s2zar_jsn_users')
            ->orderBy('lastname', 'asc')
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->where('s2zar_users.deleted_at', null)
            ->where('name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->orWhere('division', $this->search)
            ->orWhere('departments', $this->search)
            ->orWhere('position', $this->search)
            ->orWhere('team', $this->search)
            // ->orWhere('team', 'like', '%'.$this->search.'%')
            ->paginate(9)
        ])            
        ->with([
            'positions' => $positions,
            'division' => $division,
            'departments' => $departments,
            'teams' => $teams
        ]);
    }
}
