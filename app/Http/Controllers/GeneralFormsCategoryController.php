<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GeneralFormsCategoryController extends Controller
{
    public function index()
    {
        //Sort by 1-9
            $numbers = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[0-9].*$')
            ->sortable('filename')
            ->get();

        //Sort by A-D
            $lettersAD = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[A-Da-d].*$')
            ->sortable('filename')
            ->get();

        //Sort by E-H
            $lettersEH = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[E-He-h].*$')
            ->sortable('filename')
            ->get();

        //Sort by I-L
            $lettersIL = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[I-Li-l].*$')
            ->sortable('filename')
            ->get();

        //Sort by M-P
            $lettersMP = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[M-Pm-p].*$')
            ->sortable('filename')
            ->get();

        //Sort by Q-T
            $lettersQT = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[Q-Tq-t].*$')
            ->sortable('filename')
            ->get();    

        //Sort by U-X
            $lettersUX = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[U-Xu-x].*$')
            ->sortable('filename')
            ->get();    
        
        //Sort by Y-Z
            $lettersYZ = Post::whereRaw("find_in_set('generalForms', category_id)")
            ->where('filename', 'REGEXP', '^[Y-Zy-z].*$')
            ->get();
        
        //Training And Materials
        //Account Executive
            $trainingAe = Post::whereRaw("find_in_set('trainingAE', category_id)")
            ->sortable('filename')
            ->get();

        //OPS Meetings
            $trainingOps = Post::whereRaw("find_in_set('trainingOps', category_id)")
            ->sortable('filename')
            ->get();

        //Systems
            $trainingSystems = Post::whereRaw("find_in_set('trainingSystems', category_id)")
            ->sortable('filename')
            ->get();

        //Vetting
            $trainingVetting = Post::whereRaw("find_in_set('trainingVetting', category_id)")
            ->sortable('filename')
            ->get();

        //Videos
            $trainingVideos = Post::whereRaw("find_in_set('trainingVideos', category_id)")
            ->sortable('filename')
            ->get();

        return view('pages.sales.forms')
        ->with([
            'numbers'               => $numbers,
            'lettersAD'             => $lettersAD,
            'lettersEH'             => $lettersEH,
            'lettersIL'             => $lettersIL,
            'lettersMP'             => $lettersMP,
            'lettersQT'             => $lettersQT,
            'lettersUX'             => $lettersUX,
            'lettersYZ'             => $lettersYZ,
            'trainingAe'            => $trainingAe,
            'trainingOps'           => $trainingOps,
            'trainingSystems'       => $trainingSystems,
            'trainingVetting'       => $trainingVetting,
            'trainingVideos'        => $trainingVideos,
        ]);
    }

}
