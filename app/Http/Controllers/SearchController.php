<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Directory;
use App\Post;
use App\Role;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if(!empty($request->input('q'))){
            $q = $request->input('q');
            // $users = DB::table('s2zar_jsn_users')
            // ->orderBy('lastname', 'asc')
            // ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
            // ->where('name', 'LIKE', '%'.$q.'%')
            // ->orWhere('email', 'LIKE', '%'.$q.'%')
            // ->get();

            $users = User::where('name', 'LIKE', '%'.$q.'%')
            ->orWhere('email', 'LIKE', '%'.$q.'%')
            ->get();
            
            $posts = Post::where('filename', 'LIKE', '%'.$q.'%')
            ->get();
    
            return view('pages.search.results')
            ->with([
                'users' => $users,
                'posts' => $posts,
            ]);
        }

        return redirect('/');

    }
}
