<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use Session;
use App\Event;

class EventController extends Controller
{
	use SlugController;

    public function eventAdd()
    {
    	return view('cd-admin.event.event-add');
    }

    public function eventInsert(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'startdate' => 'required',
    		'enddate' => 'required',
    		'description' => 'required',
    		'active' => 'required',
    		]);
    	$start = Input::get('startdate');
    	$end = Input::get('enddate');
    	if($end <= $start)
    	{
    		Session::flash('date');
    		return redirect()->back()->withInput($request->input());
    	}
    	else
    	{
    		$event = new Event;
    		$event->title = $request->title;
    		$event->slug =$this->slug($request->title);
    		$event ->startdate = $request->startdate;
    		$event->enddate = $request->enddate;
    		$event->description = $request->description;
    		$event->active = $request->active;
    		$event->save();
    		Session::flash('success');
    		return redirect()->to('events-view');
    	}
    }

    public function eventView()
    {
    	$event = Event::orderBy('id','desc')->get();
    	return view('cd-admin.event.event-view',compact('event'));
    }

    public function eventEdit($id)
    {
    	if($event = Event::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.event.event-edit',compact('event'));
    	}
    }

    public function eventUpdate(Request $request,$id)
    {
    	if($event = Event::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'title' => 'required',
    		'startdate' => 'required',
    		'enddate' => 'required',
    		'description' => 'required',
    		'active' => 'required',
    		]);
    		$start = Input::get('startdate');
	    	$end = Input::get('enddate');
	    	if($end <= $start)
	    	{
	    		Session::flash('date');
	    		return redirect()->back()->withInput($request->input());
	    	}
	    	else
	    	{
	    		$event->title = $request->title;
	    		$event->slug =$this->slug($request->title);
	    		$event ->startdate = $request->startdate;
	    		$event->enddate = $request->enddate;
	    		$event->description = $request->description;
	    		$event->active = $request->active;
	    		$event->save();
	    		Session::flash('success1');
	    		return redirect()->to('events-view');
	    	}
    	}
    }

    public function eventDelete($id)
    {
    	if($event = Event::where('id',$id)->get()->first())
    	{
    		$event->delete();
    		Session::flash('failure');
    		return redirect()->to('events-view');
    	}
    }
}
