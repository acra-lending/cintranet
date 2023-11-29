<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;

class GeneralFormsCategoryController extends Controller
{
    public function index()
    {
        $seconds = 86400;

        //Sort by 1-9
            $numbers = Cache::remember('numbers', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[0-9].*$')
                ->sortable('filename')
                ->get();
            });
            

        //Sort by A-D
            $lettersAD = Cache::remember('lettersAD', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[A-Da-d].*$')
                ->sortable('filename')
                ->get();
            });
            

        //Sort by E-H
            $lettersEH = Cache::remember('lettersEH', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[E-He-h].*$')
                ->sortable('filename')
                ->get();
            });
            

        //Sort by I-L
            $lettersIL = Cache::remember('lettersIL', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[I-Li-l].*$')
                ->sortable('filename')
                ->get();
            });
            

        //Sort by M-P
            $lettersMP = Cache::remember('lettersMP', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[M-Pm-p].*$')
                ->sortable('filename')
                ->get();
            });
            

        //Sort by Q-T
            $lettersQT = Cache::remember('lettersQT', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[Q-Tq-t].*$')
                ->sortable('filename')
                ->get();    
            });
            

        //Sort by U-X
            $lettersUX = Cache::remember('lettersUX', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[U-Xu-x].*$')
                ->sortable('filename')
                ->get();    
            });
            
        
        //Sort by Y-Z
            $lettersYZ = Cache::remember('lettersYZ', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[Y-Zy-z].*$')
                ->get();
            
            });

            //Sort by U-Z
            $lettersUZ = Cache::remember('lettersUZ', $seconds, function() {
                return Post::whereRaw("find_in_set('generalForms', category_id)")
                ->where('filename', 'REGEXP', '^[U-Zu-z].*$')
                ->sortable('filename')
                ->get();    
            });
            

        //Admin Forms and Materials
        //Forms

        //Training And Materials
        //Account Executive
            $trainingAe = Cache::remember('trainingAe', $seconds, function() {
                return Post::whereRaw("find_in_set('trainingAE', category_id)")
                ->sortable('filename')
                ->get();
            });
            

        //OPS Meetings
            $trainingOps = Cache::remember('trainingOps', $seconds, function() {
                return Post::whereRaw("find_in_set('trainingOps', category_id)")
                ->sortable('filename')
                ->get();
            });
            

        //Systems
            $trainingSystems = Cache::remember('trainingSystems', $seconds, function() {
                return Post::whereRaw("find_in_set('trainingSystems', category_id)")
                ->sortable('filename')
                ->get();
            });
            

        //Vetting
            $trainingVetting = Cache::remember('trainingVetting', $seconds, function() {
                return Post::whereRaw("find_in_set('trainingVetting', category_id)")
                ->sortable('filename')
                ->get();
            });
            

        //Videos
            $trainingVideos = Cache::remember('trainingVideos', $seconds, function() {
                return Post::whereRaw("find_in_set('trainingVideos', category_id)")
                ->sortable('filename')
                ->get();
            });
            

        //Admin Forms and Materials
        //Forms
            $adminForms = Cache::remember('adminForms', $seconds, function() {
                return Post::whereRaw("find_in_set('adminForms', category_id)")
                ->sortable('filename')
                ->get();
            });
            

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
            'lettersUZ'             => $lettersUZ,
            'trainingAe'            => $trainingAe,
            'trainingOps'           => $trainingOps,
            'trainingSystems'       => $trainingSystems,
            'trainingVetting'       => $trainingVetting,
            'trainingVideos'        => $trainingVideos,
            'adminForms'            => $adminForms,
        ]);
    }

}
