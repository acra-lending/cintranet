<?php

namespace App\Http\Livewire\Usermanagement;

use Livewire\Component;
use Livewire\WithPagination;
use DB;

class WPUsers extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public $searchTerm = '';
    public $sortField = 'user_registered';
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
        // $wp_users = DB::connection('mysql2')->table('wp_9c4654a05b_users')->get();

        // foreach($wp_users->chunk(19) as $partOfUsers) {
        //     $usersMeta = DB::connection('mysql2')->table('wp_9c4654a05b_users')
        //     ->join('wp_9c4654a05b_usermeta', 'wp_9c4654a05b_users.ID', '=', 'wp_9c4654a05b_usermeta.user_id')
        //     ->whereIn('wp_9c4654a05b_users.ID', $partOfUsers->pluck('ID'))
        //     ->get();

        //     $combinedUsers = $partOfUsers->groupBy('ID');
        // }
        // dd($combinedUsers);

        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.usermanagement.w-p-users', [
            'users' => DB::connection('mysql2')->table('wp_9c4654a05b_users')
            ->where('display_name', 'LIKE', $searchTerm)
            ->orWhere('user_email', 'LIKE', str_replace(' ', '', $searchTerm))
            ->orWhere('user_login', 'LIKE', str_replace(' ', '', $searchTerm))
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage),
        ]);
    }
}
