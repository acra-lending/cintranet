<?php

namespace App\Http\Livewire\Usermanagement;

use Livewire\Component;
use Livewire\WithPagination;
use App\User;
use App\Role;
use Gate;
use DB;

class SearchInactive extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $searchTerm = '';
    public $sortField = 'name';
    public $sortAsc = true;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        
        $this->sortField = $field;
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.usermanagement.search-inactive', [
            'users' => User::onlyTrashed()->where(function ($query) use ($searchTerm) {
                $query
                ->where('name', 'LIKE', $searchTerm)
                ->orWhere('email', 'LIKE', $searchTerm)
                ->orWhere('created_at', 'LIKE', $searchTerm)
                ->orWhere('deleted_at', 'LIKE', $searchTerm)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })->paginate($this->perPage),
        ]);
    }
}
