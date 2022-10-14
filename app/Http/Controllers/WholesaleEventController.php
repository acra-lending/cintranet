<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\WholesaleEvent;
use Gate;


class WholesaleEventController extends Controller
{
    public function loadEvents(Request $request)
    {
        $returnedColumns = ['id', 'title', 'start', 'end', 'color', 'description'];

        $start = (!empty($request->start)) ? ($request->start) : ('');
        $end = (!empty($request->end)) ? ($request->end) : ('');

        $events = WholesaleEvent::whereBetween('start', [$start, $end])->get($returnedColumns);

        return response()->json($events);
    }

    public function store(EventRequest $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        WholesaleEvent::create($request->all());

        return response()->json(true);
    }

    public function update(EventRequest $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $event = WholesaleEvent::where('id', $request->id)->first();

        // dd($request);

        $event->fill($request->all());

        $event->save();
        // return redirect('/marketing/calendar/wholesale');
        return response()->json(true);
    }

    public function destroy(Request $request)
    {
        if(Gate::denies('delete-posts')){
            return redirect(route('home'));
        }

        WholesaleEvent::where('id', $request->id)->delete();

        return response()->json(true);
    }
}
