<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Vimeo\Laravel\Facades\Vimeo;
use Carbon\Carbon;

class HealthPlansController extends Controller
{
    public function index()
    {
        $benefitsCA = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%benefits guide ca only%')
        ->orderBy('created_at', 'desc')
        ->first();
        
        $benefitsNonCA = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%benefits guide non ca%')
        ->orderBy('created_at', 'desc')
        ->first();

        $benefitsCA2023 = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%new guide ca only%')
        ->orderBy('created_at', 'desc')
        ->first();

        $benefitsNonCA2023 = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%new guide non ca%')
        ->orderBy('created_at', 'desc')
        ->first();

        $fsaExpenseList = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%fsa expense list%')
        ->orderBy('created_at', 'desc')
        ->first();
        
        $fsaQuestions = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%fsa questions%')
        ->orderBy('created_at', 'desc')
        ->first();
        
        $hsa = Post::where('category_id', 'hsa')
        ->orderBy('created_at', 'desc')
        ->get();

        $additionalInfo = Post::where('category_id', 'additionalInfo')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('pages.humanresources.healthplan')
        ->with([
            'benefitsCA'        => $benefitsCA,
            'benefitsNonCA'     => $benefitsNonCA,
            'benefitsCA2023'    => $benefitsCA2023,
            'benefitsNonCA2023' => $benefitsNonCA2023,
            'fsaExpenseList'    => $fsaExpenseList,
            'fsaQuestions'      => $fsaQuestions,
            'hsa'               => $hsa,
            'additionalInfo'    => $additionalInfo,
        ]);
    }
}
