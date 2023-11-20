<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Announcement;
use App\AnnouncementFile;
use App\Classes\AnnouncementFileUpload;
use App\User;
use App\Role;
use DB;
use Gate;

class AnnouncementPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Announcement::orderBy('created_at', 'desc')->paginate(5)->onEachSide(2);
        $files = AnnouncementFile::orderBy('created_at', 'desc')->get();
        
        $contacts = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->get();
// dd($contacts);
        return view('pages.announcements.index')
        ->with([
            'posts' => $posts,
            'files' => $files,
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        return view('pages.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'title'     => 'required',
            'body'      => 'required',
            'file.'     => 'nullable',
            'file.*'    => 'nullable|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,png,jpg,jpeg|max:8999'
        ]);

        // Create Post
        // $post = new Announcement;
        $post = Announcement::create($request->all());
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;

        // Handle File Upload
        $uploadFile = new AnnouncementFileUpload;
        $uploadFile->uploadFile($request, $post);

        $post->save();

        return redirect('/learning/announcements')->with('success', 'Announcement Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Announcement::find($id);
        $files = AnnouncementFile::where('announcement_id', $id)->get();

        return view('pages.announcements.show')->with('post', $post)->with('files', $files);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $post = Announcement::find($id);
        $files = AnnouncementFile::where('announcement_id', $id)->get();
        return view('pages.announcements.edit')->with([
            'post' => $post,
            'files' => $files,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'title'     => 'required',
            'body'      => 'required',
            'file.'     => 'nullable',
            'file.*'    => 'nullable|mimes:pdf,doc,docx|max:8999'
        ]);

        // Create Post
        $post = Announcement::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        // Handle File Upload
        $uploadFile = new AnnouncementFileUpload;
        $uploadFile->uploadFile($request, $post);

        $post->save();

        return redirect('/learning/announcements')->with('success', 'Announcement Updated');
        
    }

    public function view($file)
    {
        $filepath = public_path().'/storage/files/'.$file;

        return response()->file($filepath);
    }

    public function destroyFile($id)
    {
        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $file = AnnouncementFile::find($id);
        $announcementId = $file->announcement_id;
        // dd($announcementId);

        // Delete file from storage
        Storage::delete('public/files/'.$file->file);
        // Delete AnnouncementFile post
        $file->delete();

        return redirect('/learning/announcements/'. $announcementId .'/edit')->with('success', 'File Removed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Check for correct user
        if(Gate::denies('delete-posts')){
            return redirect('/learning/announcements')->with('error', 'Unauthorized');
        }

        $post = Announcement::find($id);
        $files = AnnouncementFile::orderBy('created_at', 'desc')->get();


        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('/learning/announcements')->with('error', 'Unauthorized');
        // }

        // Check for files
        // foreach($files as $file){
        //     if($post->id == $file->announcement_id){
        //         // Delete file
        //         Storage::delete('public/files/'.$file->file);
        //     }
        // }

        $post->delete();
        return redirect('/learning/announcements')->with('success', 'Post Removed');
    }
}
