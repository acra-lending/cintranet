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

        $fsaExpenseList = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%fsa expense list%')
        ->orderBy('created_at', 'desc')
        ->first();
        
        $fsaEnrollment = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%fsa enrollment%')
        ->orderBy('created_at', 'desc')
        ->first();

        $url = Vimeo::request("/users/124219438/projects/4606611/videos", ['per_page' => 99], 'GET');
        $url = $url['body'];
        $data = $url['data'];
        $humanresourcesBenefits = $data;

        return view('pages.humanresources.healthplan', compact([
            'humanresourcesBenefits'
            ]))
        ->with([
            'benefitsCA'        => $benefitsCA,
            'benefitsNonCA'     => $benefitsNonCA,
            'fsaExpenseList'    => $fsaExpenseList,
            'fsaEnrollment'     => $fsaEnrollment,
        ]);
    }
}
