<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reminder;
use App\User;
use App\Role;
use Gate;

class ReminderController extends Controller
{
    public function create()
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        return view('pages.reminder.index');
    }

    public function store(Request $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'body' => 'required',
        ]);


        // Create Post
        $post = Reminder::create($request->all());
        $post->user_id = Auth::user()->id;
        $post->body = $request->input('body');
        $post->save();

        return redirect ('/employee/reminders')
            ->with('success', 'Reminders Updated');
    }
}
