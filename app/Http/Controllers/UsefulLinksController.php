<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsefulLinks;
use App\User;
use App\Role;
use Gate;

class UsefulLinksController extends Controller
{
    public function index()
    {
        $loanSetUp = UsefulLinks::whereRaw("find_in_set('loan_set_up', category)")
        ->sortable('title')
        ->get();

        $TmRetailProcessing = UsefulLinks::whereRaw("find_in_set('tm_retail_processing', category)")
        ->sortable('title')
        ->get();
        
        $underWriting = UsefulLinks::whereRaw("find_in_set('underwriting', category)")
        ->sortable('title')
        ->get();

        $closing = UsefulLinks::whereRaw("find_in_set('closing', category)")
        ->sortable('title')
        ->get();

        $funding = UsefulLinks::whereRaw("find_in_set('funding', category)")
        ->sortable('title')
        ->get();

        $fileFlow = UsefulLinks::whereRaw("find_in_set('file_flow', category)")
        ->sortable('title')
        ->get();

        return view('pages.operations.usefullinks.index')
        ->with([
            'loanSetUp'             => $loanSetUp,
            'TmRetailProcessing'    => $TmRetailProcessing,
            'underWriting'          => $underWriting,
            'closing'               => $closing,
            'funding'               => $funding,
            'fileFlow'              => $fileFlow
        ]);
    }
    
    public function create() {

        if(Gate::denies('manage-users')){
            return redirect(route('home'));
        }

        return view('pages.operations.usefullinks.create');
    }

    public function store(Request $request) {

        if(Gate::denies('manage-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'link_title'     => 'required',
            'link_url'      => 'required',
            'link_category'  => 'required'
        ]);

        $post = UsefulLinks::create($request->all());
        $post->title = $request->input('link_title');
        $post->url = $request->input('link_url');
        $post->category = $request->input('link_category');
        $post->user_id = auth()->user()->id;

        $post->save();

        return redirect('/operations/usefullinks')->with('success', 'Link Created');
    }

    public function update(Request $request) {

        if(Gate::denies('manage-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'link_title'     => 'required',
            'link_url'      => 'required',
            'link_category'  => 'required'
        ]);

        $post = UsefulLinks::find($request->link_id);
        $post->title = $request->input('link_title');
        $post->url = $request->input('link_url');
        $post->category = $request->input('link_category');

        $post->save();

        return back()->with('success', 'Link Updated');
    }

    public function destroy($id) {

        if(Gate::denies('delete-posts')){
            return redirect('/operations/usefullinks')->with('error', 'Unauthorized');
        }

        $post = UsefulLinks::find($id);

        $post->delete();

        return redirect('/operations/usefullinks')->with('success', 'Link Deleted');
    }
}
