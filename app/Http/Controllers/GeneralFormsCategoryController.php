<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GeneralFormsCategoryController extends Controller
{
    public function index()
    {
        //Sort by Numbers
            $numbers = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "1%")
            ->orWhere('filename', 'like', "2%")
            ->orWhere('filename', 'like', "3%")
            ->orWhere('filename', 'like', "4%")
            ->orWhere('filename', 'like', "5%")
            ->orWhere('filename', 'like', "6%")
            ->orWhere('filename', 'like', "7%")
            ->orWhere('filename', 'like', "8%")
            ->orWhere('filename', 'like', "9%")
            ->orderBy('filename', 'asc')
            ->get();

        //Sort by A-D
            $lettersAD = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "A%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "B%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "C%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "D%")
            ->orderBy('filename', 'asc')
            ->get();

        //Sort by E-H
            $lettersEH = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "E%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "F%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "G%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "H%")
            ->orderBy('filename', 'asc')
            ->get();

        //Sort by I-L
            $lettersIL = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "I%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "J%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "K%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "L%")
            ->orderBy('filename', 'asc')
            ->get();

        //Sort by M-P
            $lettersMP = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "M%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "N%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "O%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "P%")
            ->orderBy('filename', 'asc')
            ->get();

        //Sort by Q-T
            $lettersQT = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "Q%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "R%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "S%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "T%")
            ->orderBy('filename', 'asc')
            ->get();    

        //Sort by U-X
            $lettersUX = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "U%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "V%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "W%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "X%")
            ->orderBy('filename', 'asc')
            ->get();    
        
        //Sort by Y-Z
            $lettersYZ = Post::where('category_id', 'generalForms')
            ->where('filename', 'like', "Y%")
            ->orWhere('category_id', 'generalForms')
            ->where('filename', 'like', "Z%")
            ->get();
        
        //Training And Materials
        //Account Executive
            $trainingAe = Post::where('category_id', 'trainingAe')
            ->orderBy('filename', 'asc')
            ->get();

        //OPS Meetings
            $trainingOps = Post::where('category_id', 'trainingOps')
            ->orderBy('filename', 'asc')
            ->get();

        //Systems
            $trainingSystems = Post::where('category_id', 'trainingSystems')
            ->orderBy('filename', 'asc')
            ->get();

        //Vetting
            $trainingVetting = Post::where('category_id', 'trainingVetting')
            ->orderBy('filename', 'asc')
            ->get();

        //Videos
            $trainingVideos = Post::where('category_id', 'trainingVideos')
            ->orderBy('filename', 'asc')
            ->get();

        //Marketing Materials & Reference
        //Marketing Requests
            $marketingForms = Post::where('category_id', 'marketingForms')
            ->orderBy('filename', 'asc')
            ->get();
    
        //Materials & Reference
            $marketingMaterials = Post::where('category_id', 'marketingMaterials')
            ->orderBy('filename', 'asc')
            ->get();

        return view('pages.sales.forms')
        ->with('numbers', $numbers)
        ->with('lettersAD', $lettersAD)
        ->with('lettersEH', $lettersEH)
        ->with('lettersIL', $lettersIL)
        ->with('lettersMP', $lettersMP)
        ->with('lettersQT', $lettersQT)
        ->with('lettersUX', $lettersUX)
        ->with('lettersYZ', $lettersYZ)
        ->with('trainingAe', $trainingAe)
        ->with('trainingOps', $trainingOps)
        ->with('trainingSystems', $trainingSystems)
        ->with('trainingVetting', $trainingVetting)
        ->with('trainingVideos', $trainingVideos)
        ->with('marketingForms', $marketingForms)
        ->with('marketingMaterials', $marketingMaterials)
        ;
        }

}
