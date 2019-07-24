<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use Session;
use App\AboutTimeLine;

class AboutTimeLineController extends Controller
{
    public function addTimeline()
    {
    	return view('cd-admin.about.about-timeline');
    }

    public function timelineInsert(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'date' => 'required',
    		'summary' => 'required',
    		
    		]);
    	$time = new AboutTimeLine;
    	$time->title = $request->title;
    	$time->date = $request->date;
    	$time->summary = $request->summary;

    	$time->save();
    	Session::flash('success');
    	return redirect()->to('abouts-view-timeline');
    }

    public function timelineView()
    {
    	$time = AboutTimeLine::orderBy('id','desc')->get();
    	return view('cd-admin.about.about-view-timeline',compact('time'));
    }

    public function timelineEdit($id)
    {
    	if($time = AboutTimeLine::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.about.about-edit-timeline',compact('time'));
    	}
    }


    public function timelineUpdate(Request $request,$id)
    {
    	if($time = AboutTimeLine::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'title' => 'required',
    		'date' => 'required',
    		'summary' => 'required',
    		
    		]);

	    	$time->title = $request->title;
	    	$time->date = $request->date;
	    	$time->summary = $request->summary;

	    	$time->save();
	    	Session::flash('success1');
	    	return redirect()->to('abouts-view-timeline');
    	}
    }

    public function timelineDelete($id)
    {
    	if($time = AboutTimeLine::where('id',$id)->get()->first())
    	{
    		$time->delete();
    		Session::flash('failure');
    		return redirect()->to('abouts-view-timeline');
    	}
    }
}
