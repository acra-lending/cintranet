<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Directory;
use App\Post;
use App\Role;
use App\Announcement;
use App\AnnouncementFile;
use App\Event;
use App\LearningPost;

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

            $announcements = Announcement::where('title', 'LIKE', '%'.$q.'%')
            ->get();
            $learningPosts = LearningPost::where('title', 'LIKE', '%'.$q.'%')
            ->get();
            $files = AnnouncementFile::orderBy('created_at', 'desc')
            ->get();

            $events = Event::where('title', 'LIKE', '%'.$q.'%')
            ->get();
    
            return view('pages.search.results')
            ->with([
                'users'         => $users,
                'posts'         => $posts,
                'announcements' => $announcements,
                'learningPosts' => $learningPosts,
                'files'         => $files,
                'events'         => $events
            ]);
        }

        return redirect('/');

    }

    public function show(Request $request)
    {
        if(!empty($request->input('q'))){
            $q = $request->input('q');

            $posts = Announcement::where('title', 'LIKE', '%'.$q.'%')
            ->paginate(5);
            $files = AnnouncementFile::orderBy('created_at', 'desc')->get();

            $contacts = DB::table('s2zar_jsn_users')
            ->orderBy('lastname', 'asc')
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->get();
            
            return view('pages.announcements.index')
            ->with([
                'posts'     => $posts,
                'files'     => $files,
                'contacts'  => $contacts
                ]);
        }
    }
}
