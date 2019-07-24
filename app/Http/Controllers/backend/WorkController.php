<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use Session;
use App\Work;

class WorkController extends Controller
{
	use SlugController;

    public function workAdd()
    {
    	return view('cd-admin.work.work-add');
    }

    public function workInsert(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'date' => 'date',
    		'description' => 'required',
    		]);
    	$work = new Work;
    	$work->title = $request->title;
    	$work->slug = $this->slug($request->title);
    	$work->date = $request->date;
    	$work->description = $request->description;
    	$work->active = $request->active;
    	$work->save();
    	Session::flash('success');
    	return redirect()->to('work-view');
    }

    public function workView()
    {
    	$work = Work::orderBy('id','desc')->get();
    	return view('cd-admin.work.work-view',compact('work'));
    }

    public function workEdit($id)
    {
    	if($work = Work::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.work.work-edit',compact('work'));
    	}
    }

    public function workUpdate(Request $request,$id)
    {
    	if($work = Work::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'title' => 'required',
    		'date' => 'date',
    		'description' => 'required',
    		]);
	    	$work->title = $request->title;
	    	$work->slug = $this->slug($request->title);
	    	$work->date = $request->date;
	    	$work->description = $request->description;
	    	$work->active = $request->active;
	    	$work->save();
	    	Session::flash('success1');
	    	return redirect()->to('work-view');
    	}
    }

    public function workDelete($id)
    {
    	if($work = Work::where('id',$id)->get()->first())
    	{
    		$work->delete();
    		Session::flash('failure');
    		return redirect()->to('/work-view');
    	}
    }
}
