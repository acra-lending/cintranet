<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FastEventRequest;
use App\WholesaleFastEvent;
use Gate;


class WholesaleFastEventController extends Controller
{
    public function store(FastEventRequest $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $fastEvent = WholesaleFastEvent::create($request->all());

        return response()->json(['created' => $fastEvent->id]);
    }

    public function update(FastEventRequest $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $event = WholesaleFastEvent::where('id', $request->id)->first();

        $event->fill($request->all());

        $event->save();

        return response()->json(['updated' => $event->id]);
    }
    
    public function destroy(Request $request)
    {
        if(Gate::denies('delete-posts')){
            return redirect(route('home'));
        }

        WholesaleFastEvent::where('id', $request->id)->delete();

        return response()->json(true);
    }
}
