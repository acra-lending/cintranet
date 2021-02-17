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

    public $searchTerm = '';
    public $position;
    public $department;

    protected $queryString = ['searchTerm'];
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->searchTerm = request()->query('searchTerm', $this->searchTerm);
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $positions = DB::table('s2zar_jsn_users')
        ->orderBy('position', 'asc')
        ->groupBy('position')
        ->where('position', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('position', 'position')
        ->toArray();

        $departments = DB::table('s2zar_jsn_users')
        ->orderBy('departments', 'asc')
        ->groupBy('departments')
        ->where('departments', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('departments', 'departments')
        ->toArray();
        
        return view('livewire.directory.search', [
            'contacts' => DB::table('s2zar_jsn_users')
            ->orderBy('lastname', 'asc')
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->where('name', 'LIKE', $searchTerm)
            ->orWhere('email', 'LIKE', $searchTerm)
            ->orWhere('departments', 'LIKE', $searchTerm)
            ->orWhere('position', 'LIKE', $searchTerm)
            ->orWhere('team', 'LIKE', $searchTerm)
            ->paginate(9)
        ])            
        ->with([
            'positions' => $positions,
            'departments' => $departments
        ]);
    }
}
