<?php

namespace App\Http\Livewire\Learning;

use Livewire\Component;
use Livewire\WithPagination;
use App\LearningPost;
use DB;
use App\User;
use Gate;

class Index extends Component
{
    use WithPagination;
    
    public $contacts;

    public function render()
    {
        $this->contacts = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->get()
        ->toArray();

        return view('livewire.learning.index', [
            'posts' => LearningPost::orderBy('created_at', 'desc')
            ->paginate(5)
        ]);
    }
}
