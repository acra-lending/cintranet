<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CourseCatalogController extends Controller
{
    public function index()
    {
        $courseCatalog = Post::where('category_id', 'learning')
        ->where('filename', 'like', '%course_catalog%')
        ->orWhere('filename', 'like', '%course catalog%')
        ->orderBy('created_at', 'desc')
        ->first();

        return view('pages.learning.courses.catalog.index')
        ->with([
            'courseCatalog' => $courseCatalog
        ]);
    }
}
