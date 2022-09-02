<?php

namespace App\Http\Livewire\Fixandflip;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;
use DB;

class FixandFlipDocuments extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $fixAndFlipDocs = Post::whereRaw("find_in_set('fixAndFlipDocs', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipSystems = Post::whereRaw("find_in_set('fixAndFlipSystems', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipUw = Post::whereRaw("find_in_set('fixAndFlipUw', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipFunding = Post::whereRaw("find_in_set('fixAndFlipFunding', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipProcessing = Post::whereRaw("find_in_set('fixAndFlipProcessing', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipFlyers = Post::whereRaw("find_in_set('fixAndFlipFlyers', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipBulletins = Post::whereRaw("find_in_set('fixAndFlipBulletins', category_id)")
        ->orderBy('created_at', 'desc')
        // ->sortable(['created_at' => 'desc'])
        ->simplePaginate(15);
        
        return view('livewire.fixandflip.fixand-flip-documents')->with([
            'fixAndFlipDocs'            => $fixAndFlipDocs,
            'fixAndFlipSystems'         => $fixAndFlipSystems,
            'fixAndFlipUw'              => $fixAndFlipUw,
            'fixAndFlipFunding'         => $fixAndFlipFunding,
            'fixAndFlipProcessing'      => $fixAndFlipProcessing,
            'fixAndFlipFlyers'          => $fixAndFlipFlyers,
            'fixAndFlipBulletins'       => $fixAndFlipBulletins
        ]);
        
    }
}
