<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\TurnTimes;
use App\Sections;
use App\SubSections;
use Gate;


class TurnTimesController extends Controller
{
    public function index()
    {
        $turnTimes = TurnTimes::with('section.subSection')->first();

        return response()->json($turnTimes);
    }

    public function show()
    {
        $turnTimes = TurnTimes::with('section.subSection')->first();
        // dd($turnTimes);

        return view('pages.turntimes.show')->with([
            'turnTimes' => $turnTimes,
        ]);
    }

    public function edit()
    {
        $turnTimes = TurnTimes::with('section.subSection')->find(1);
        // dd($turnTimes);

        return view('pages.turntimes.edit')->with([
            'turnTimes' => $turnTimes,
        ]);
    }

    public function update(Request $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'section' => 'required',
            'section.*' => 'required',
            'body' => 'nullable',
            'body.*' => 'nullable',
            'comments' => 'nullable',
            'comments.*' => 'nullable',
            'subSectionTitle' => 'nullable',
            'subSectionTitle.*' => 'nullable',
            'subSectionBody' => 'nullable',
            'subSectionBody.*' => 'nullable',
            'subSectionComments' => 'nullable',
            'subSectionComments.*' => 'nullable',
        ]);

        $input = $request->all();
        // dd($input['section']['title']);
        $titleLength = count($input['section']['title']);
        $bodyLength = count($input['section']['body']);
        $commentLength = count($input['section']['comments']);

        //Update post
        
        $turnTimes = TurnTimes::with('section.subSection')->find(1);

        $num = 0;
        // dd(count($input['section']['title']) <= $titleLength);
        while ($num < $titleLength) {
            $turnTimes->section[$num]->title = $input['section']['title'][$num];
            $num++;
        }
        $turnTimes->push();
        // dd($turnTimes->section[1]);
        // $turnTimes->section()->delete('title');

            // dd($data);
                // $sections = new Sections([
                //     'title' => $input['section']['title'],
                // ]);


        return redirect('/turntimes')->with('success', 'Turn Times Updated');   

    }

}
