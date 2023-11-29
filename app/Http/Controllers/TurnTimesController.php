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
        $turnTimes = TurnTimes::with('section.subSection')->find(1);

        return response()->json($turnTimes);
    }

    public function idl_index()
    {
        $turnTimes = TurnTimes::with('section.subSection')->find(2);

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
            'subSection' => 'nullable',
            'subSection.*' => 'nullable',
        ]);

        $input = $request->all();

        $titleLength = count(array_filter($input['section']['title']));
        $bodyLength = count(array_filter($input['section']['body']));
        $commentLength = count(array_filter($input['section']['comments']));
        $subSectionTitleLength = count(array_filter($input['subSection']['title']));
        $subSectionBodyLength = count(array_filter($input['subSection']['body']));
        $subSectionCommentLength = count(array_filter($input['subSection']['comments']));

        //Update post
        $turnTimes = TurnTimes::with('section.subSection')->find(1);
        $num = 0;
        while ($num < $titleLength) {
            $turnTimes->section[$num]->title = $input['section']['title'][$num];
            $num++;
        }
        
        $num = 0;
        while ($num < $bodyLength) {
            $turnTimes->section[$num]->body = $input['section']['body'][$num];
            $num++;
        }

        $num = 0;
        while ($num < $commentLength) {
            $turnTimes->section[$num]->comments = $input['section']['comments'][$num];
            $num++;
        }

        $num = 0;
        while ($num < $subSectionTitleLength) {
            $turnTimes->subSection[$num]->title = $input['subSection']['title'][$num];
            $num++;
        }
        
        $num = 0;
        while ($num < $subSectionBodyLength) {
            $turnTimes->subSection[$num]->body = $input['subSection']['body'][$num];
            $num++;
        }

        $num = 0;
        while ($num < $subSectionCommentLength) {
            $turnTimes->subSection[$num]->comments = $input['subSection']['comments'][$num];
            $num++;
        }
        $turnTimes->push();


        return redirect('/turntimes')->with('success', 'Turn Times Updated');   

    }

}
