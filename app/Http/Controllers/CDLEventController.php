<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\CDLEvent;
use Gate;


class CDLEventController extends Controller
{
    public function loadEvents(Request $request)
    {
        $returnedColumns = ['id', 'title', 'start', 'end', 'color', 'description'];

        $start = (!empty($request->start)) ? ($request->start) : ('');
        $end = (!empty($request->end)) ? ($request->end) : ('');

        $events = CDLEvent::whereBetween('start', [$start, $end])->get($returnedColumns);

        return response()->json($events);
    }

    public function store(EventRequest $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        CDLEvent::create($request->all());

        return response()->json(true);
    }

    public function update(EventRequest $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $event = CDLEvent::where('id', $request->id)->first();

        $event->fill($request->all());

        $event->save();

        return response()->json(true);
    }

    public function destroy(Request $request)
    {
        if(Gate::denies('delete-posts')){
            return redirect(route('home'));
        }

        CDLEvent::where('id', $request->id)->delete();

        return response()->json(true);
    }
}
