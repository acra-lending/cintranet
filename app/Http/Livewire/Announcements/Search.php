<?php

namespace App\Http\Livewire\Announcements;

use Livewire\Component;
use Livewire\WithPagination;
use App\Announcement;
use App\AnnouncementFile;
use App\User;
use App\Role;
use Gate;
use DB;

class Search extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $files;
    public $contacts;

    protected $updatesQueryString = ['searchTerm'];

    public function mount()
    {
        $this->searchTerm = request()->query('searchTerm', $this->searchTerm);
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        $this->files = AnnouncementFile::orderBy('created_at', 'desc')->get();
        $this->contacts = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->get()
        ->toArray();
        
        return view('livewire.announcements.search', [
            'posts' => Announcement::where('title', 'LIKE', $searchTerm)
            ->orderby('created_at', 'desc')
            ->paginate(5) 
        ]);
    }
}
